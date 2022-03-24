<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Mobile\Event\EventController;
use App\Http\Controllers\PaystackController;
use App\Http\Resources\ChurchResource;
use App\Http\Resources\EventResource;
use App\Http\Resources\MediaResource;
use App\Http\Resources\WebConnectResource;
use App\Mail\ChurchContactForm;
use App\Models\Church;
use App\Models\Media;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Management\WebConnect\WebConnectController as WebManagementConnect;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class WebConnectController extends Controller
{
    //
    public function index(Request $request, $slug)
    {
        $church = Church::get_church($slug);
        $published = WebManagementConnect::get_web_published($church);
        return new WebConnectResource($published);
    }

    public function get_all_events(Request $request, $slug)
    {
        $church = Church::get_church($slug);
        $events = $church->events()->orderBy('start_date');

        if ($order = $request->input('order')) {
            if ($order == 'latest') {
                $events = $events->whereDate('start_date', '>=', now());
            } elseif ($order == 'old') {
                $events = $events->whereDate('start_date', '<', now());
            }
        }

        if ($limit = (int)$request->input('limit')) {
            $events = $events->take($limit);
        }

        return EventResource::collection($events->get());
    }

    public function get_all_media(Request $request, $slug, $type)
    {
        $church = Church::get_church($slug);
        $media = $church->media()->where('display_web', true)->where('type', $type)->latest();

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

    public function download_media($slug, $media_id, $purchased = false)
    {
        $church = Church::get_church($slug);
        $media = $church->media()->findOrFail($media_id);

        if (!$purchased || $media->price > 0) {
            return response()->json(['You need to purchase this media'], 403);
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
        $media = $church->media()->where('display_web', true)->findOrFail($id);

        $response = PaystackController::verify($request->ref);
        if ($response['status']) {
            $data = $response['data'];
            if ($data['status'] === 'success') {
                $payment = Payment::where('transaction_id', $data['id'])->first();
                if (!$payment) {
                    if ($data['amount'] >= $media->price) {
                        $payment = $church->income()->create([
                            'account_id' => $media->account_id,
                            'payable_id' => $media->id,
                            'payable_type' => Media::class,
                            'transaction_id' => $data['id'],
                            'reference' => $data['reference'],
                            'amount' => $data['amount'],
                            'currency' => $data['currency'],
                            'status' => 'SUCCESS'
                        ]);

                        return $this->download_media($slug, $media->id, true);
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

    public function contact(Request $request, $slug)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'filled|email',
            'phone' => 'filled|string|min:11',
            'message' => 'required|string'
        ]);

        $church = Church::get_church($slug);
        $church->load('details');
        if (!($church->details && $church->details->email)) {
            return response()->json(['message' => "This church hasn't registered an email address yet. Please contact your administrator"], 403);
        }

        $data = $request->all() + ['subject' => "CHURCHVEST: WEBSITE"];

        Mail::to($church->details->email)->send(new ChurchContactForm($data));
        return response()->json(['status' => 'success']);
    }

    public function get_church_details(Request $request, $slug)
    {
        $church = Church::get_church($slug);
        return new ChurchResource($church);
    }
}
