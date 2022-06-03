<?php

namespace App\Http\Controllers\Management\Media;

use App\Http\Controllers\Controller;

use App\Http\Resources\MusicShedularResource;
use App\Models\MusicShedular;
use Illuminate\Http\Request;

class MusicShedularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $seduledMusic = MusicShedular::all();
        return MusicShedularResource::collection($seduledMusic);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $musicShedular = MusicShedular::create($request->all());
        return new MusicShedularResource($musicShedular);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MusicShedular  $musicShedular
     * @return \Illuminate\Http\Response
     */
    public function show(MusicShedular $musicShedular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MusicShedular  $musicShedular
     * @return \Illuminate\Http\Response
     */
    public function edit(MusicShedular $musicShedular)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MusicShedular  $musicShedular
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $musicShedular)
    {
        //
      $musicShedular = MusicShedular::whereId($musicShedular)->update($request->all());
      return new MusicShedularResource($musicShedular);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MusicShedular  $musicShedular
     * @return \Illuminate\Http\Response
     */
    public function destroy($musicShedular)
    {
        //
        $musicShedular = MusicShedular::whereId($musicShedular)->delete();
        return new MusicShedularResource($musicShedular);
    }
    public function getMusicShedularByRadioId()
    {
        //
        $radioId = auth()->user()->radio_details->id;
        $musicShedular = MusicShedular::where('radio_id', $radioId)->get();
        return MusicShedularResource::collection($musicShedular);
    }
    public function getMusicShedularByMediaId($mediaId)
    {
        //
        $musicShedular = MusicShedular::where('media_id', $mediaId)->get();
        return MusicShedularResource::collection($musicShedular);
    }
}
