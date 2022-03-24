<?php

namespace App\Http\Controllers\Management\Media;

use App\Http\Controllers\Controller;
use App\Http\Resources\MediaResource;
use App\Http\Resources\TrackList;
use App\Models\Church;
use App\Models\Media;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use wapmorgan\Mp3Info\Mp3Info;

class MediaController extends Controller
{
    //

    public function get_all_media($slug, $type)
    {
        $church = Church::get_church($slug);
        $media = $church->media()->where('type', $type)->with('account');
        if ($type == 'track') {
            $media = $media->with('track');
        } elseif ($type === 'album') {
            $media = $media->with('tracks');
        }

        $media = $media->get();

        return MediaResource::collection($media);
    }

    public function get_all_trash($userId, $type)
    {
        $user = User::findorFail($userId);
        $media = $user->media()->onlyTrashed()->where('type', $type);
        if ($type == 'track') {
            $media = $media->with('track');
        } elseif ($type === 'album') {
            $media = $media->with('tracks');
        }

        $media = $media->get();

        return MediaResource::collection($media);
    }

    public function upload_media(Request $request)
    {

        $user = auth()->user();
        // $rules = [
        //     'type' => 'required|in:' . implode(',', Media::$types),
        //     'title' => [
        //         'required',
        //         'string',
        //         Rule::unique('media', 'title')->where('user_id', $user->id)
        //     ],

        //     'price' => 'nullable|required_with:account_id|numeric',
        //     'description' => 'nullable|string'
        // ];
        // $request->validate($rules);
        // if ($request->type === 'track') {
        //     $rules = [
        //         'track' => 'required|file|mimes:mp3',
        //     ];
        // } elseif ($request->type === 'album') {
        //     $rules = [
        //         'tracks' => 'required|array',
        //         'tracks.*' => 'required|file|mimes:mp3'
        //     ];
        // } else {
        //     $rules = [
        //         'upload' => 'required|file|mimes:pdf,mp3',
        //     ];
        // }
        // $request->validate($rules);

        $media = $user->media()->create([
            'type' => $request->type,
            'title' => $request->title,
            'owner_name' => $user->name,
            'price' => $request->price ?: 0,
            'description' => $request->description,
            'status' => 'pending'
        ]);

        if ($request->type === 'track') {
            if ($request->hasFile('upload') && $request->file('upload')->isValid()) {
                $file = $request->file('upload');
                $file_name = Str::slug($media->title) . '.mp3';
                $path = $user->id . '/uploads/media/' . $media->type;
                static::add_track_to_media($media, $file, $file_name, $path);
                $media->load('upload');
            }
        } elseif ($request->type === 'album') {
            if ($request->hasFile('tracks')) {
                $path = $user->id . '/uploads/media/' . $media->type;
                foreach ($request->file('tracks') as $file) {
                    $file_name = $file->getFilename() . '_' . time() . '_.mp3';
                    static::add_track_to_media($media, $file, $file_name, $path);
                }
                $path .= '/' . Str::slug($media->title) . '_' . time() . '_.zip';
                static::zip_media($media, storage_path('app/' . $path));
                $media->update([
                    'upload' => $path
                ]);
                $media->load('tracks');
            }
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Media uploaded successfully',
            'data' => new MediaResource($media)
        ]);
    }

    public static function add_track_to_media($media, $file, $file_name, $path)
    {
        $path = $file->storeAs($path, $file_name);
        $duration = 0;
        try {
            $audio = new Mp3Info($path, true);
            $duration = $audio->duration;

        } catch (Exception $e) {
        }

        $media->track()->create([
            'duration' => $duration,
            'path' => $path
        ]);
    }

    public function download_media($userId, $media_id)
    {
        $user = User::findorFail($userId);
        $media = $user->media()->findOrFail($media_id);

        $path = $media->upload;
        if ($media->type === 'track') {
            $path = $media->track->path;
        }

        if (Storage::exists($path)) {
            return Storage::download($path);
        }

        return response()->json([
            'status' => 'failed',
            'message' => "Can't find file to download"
        ], 403);
    }

    public function delete_media(Request $request, $userId)
    {
        $user = User::findorFail($userId);
        $request->validate([
            'media_id' => [
                'required',
                'array',
                'min:1'

            ],
            'media_id.*' => [
                'integer',
                Rule::exists('media', 'id')->where('user_id', $user->id)
            ]
        ]);

        $user->media()->whereIn('id', $request->media_id)->delete();

        return response()->json([
            'status' => 'success',
            'message' => "Media moved to thrash successfully"
        ]);
    }

    public function restore_trash(Request $request, $userId)
    {
        $user = User::findorFail($userId);
        $request->validate([
            'media_id' => [
                'required',
                'array',
                'min:1'
            ],

            'media_id.*' => [
                'integer',
                Rule::exists('media', 'id')->where('user_id', $user->id)->whereNotNull('deleted_at')
            ]
        ]);

        $user->media()->onlyTrashed()->whereIn('id', $request->media_id)->restore();

        return response()->json([
            'status' => 'success',
            'message' => "Media restored from trash successfully"
        ]);
    }

    public function delete_trash(Request $request, $userId)
    {
        $user = User::findorFail($userId);
        $request->validate([
            'media_id' => [
                'required',
                'array',
                'min:1'
            ],

            'media_id.*' => [
                'integer',
                Rule::exists('media', 'id')->where('church_id', $user->id)->whereNotNull('deleted_at')
            ]
        ]);

        $media = $user->media()->onlyTrashed()->whereIn('id', $request->media_id)->firstOrFail();

        if ($request->type === 'track') {
            if (Storage::exists($media->track->path)) {
                Storage::delete($media->track->path);
            }
        } elseif ($request->type === 'album') {
            foreach ($media->tracks as $track) {
                if (Storage::exists($track->path)) {
                    Storage::delete($track->path);
                }
            }
            if (Storage::exists($media->upload)) {
                Storage::delete($media->upload);
            }
        } else {
            if (Storage::exists($media->upload)) {
                Storage::delete($media->upload);
            }
        }

        $user->media()->onlyTrashed()->whereIn('id', $request->media_id)->forceDelete();

        return response()->json([
            'status' => 'success',
            'message' => "Media permanently deleted from trash successfully"
        ]);
    }

    public static function zip_media($media, $path)
    {
        $zip = new \ZipArchive();
        if ($zip->open($path, \ZipArchive::CREATE | \ZipArchive::OVERWRITE)) {
            foreach ($media->tracks as $track) {
                $file = $track->path;
                $file_name = explode('/album/', $track->path)[1];
                $zip->addFile(storage_path('app/' . $file), $file_name);
            }
            $zip->close();
        }
    }

    public function myPlayList()
    {
        return TrackList::collection(auth()->user()->media);
    }
}
