<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Http\Resources\EventResource;
use App\Http\Resources\MediaResource;
use App\Models\Church;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    //
    public function get_testimonials()
    {

    }

    public function search(Request $request, $slug)
    {
        $request->validate([
            'query' => 'required|string'
        ]);
        $church = Church::get_church($slug);

        $q = $request->input('query');

        $events = $church->events()->where('name', 'like', "%$q%")->get();
        $media = $church->media()->where('title', 'like', "%$q%")->get();

        return response()->json([
            'status' => 'success',
            'message' => 'data retrieved successfully',
            'data' => [
                'events' => EventResource::collection($events),
                'media' => MediaResource::collection($media)
            ]
        ]);
    }
}
