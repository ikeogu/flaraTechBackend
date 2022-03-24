<?php

namespace App\Http\Controllers\Mobile\Media;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PaystackController;
use App\Http\Resources\MediaResource;
use App\Models\Church;
use App\Models\Media;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    //
    public function get_all_media(Request $request, $slug, $type)
    {
        $church = Church::get_church($slug);
        $media = $church->media()->where('display_mobile', true)->where('type', $type)->latest();

        if ($limit = (int)$request->input('limit')) {
            $media = $media->take($limit);
        }
        if ($type == 'track') {
            $media = $media->with('track');
        } elseif ($type === 'album') {
            $media = $media->with('tracks');
        }

        $media = $media->get();

        return MediaResource::collection($media);
    }

    public function download_media($slug, $media_id)
    {
        $church = Church::get_church($slug);
        $media = $church->media()->findOrFail($media_id);

        if ($media->price > 0) {
            $member = $church->members()->findOrFail(auth()->user()->id);
            $payment = $member->payments()
                ->where('payable_type', Media::class)
                ->where('payable_id', $media->id)
                ->where('amount', '>=', $media->price)
                ->first();

            if (!$payment) {
                return response()->json([
                    'status' => 'failed',
                    'message' => 'You have not purchased this media'
                ], 403);
            }
        }

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

    public function buy_media(Request $request, $slug, $id)
    {
        $church = Church::get_church($slug);
        $request->validate([
            'ref' => "required|string"
        ]);
        $media = $church->media()->where('display_mobile', true)->findOrFail($id);

        $response = PaystackController::verify($request->ref);
        if ($response['status']) {
            $data = $response['data'];
            if ($data['status'] === 'success') {
                $payment = Payment::where('transaction_id', $data['id'])->first();
                if (!$payment) {
                    if ($data['amount'] >= $media->price) {
                        $member = $church->members()->where('user_id', auth()->user()->id)->firstOrFail();
                        $member->payments()->create([
                            'account_id' => $media->account_id,
                            'payable_id' => $media->id,
                            'payable_type' => Media::class,
                            'receiver_id' => $church->id,
                            'receiver_type' => Church::class,
                            'transaction_id' => $data['id'],
                            'reference' => $data['reference'],
                            'amount' => $data['amount'],
                            'currency' => $data['currency'],
                            'status' => 'SUCCESS'
                        ]);

                        return response()->json([
                            'status' => 'success',
                            'message' => 'Media purchased successfully',
                        ]);
                    } else {
                        return response()->json([
                            'status' => 'failed',
                            'message' => 'Invalid amount paid'
                        ], 403);
                    }
                } else {
                    return response()->json([
                        'status' => 'failed',
                        'message' => 'Duplicate Transaction'
                    ], 403);
                }
            } else {
                return response()->json([
                    'status' => 'failed',
                    'message' => 'Transaction failed'
                ], 403);
            }
        } else {
            return response()->json($response, 403);
        }
    }
}
