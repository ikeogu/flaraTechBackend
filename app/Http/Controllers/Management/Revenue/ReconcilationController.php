<?php

namespace App\Http\Controllers\Management\Revenue;

use App\Http\Resources\ReconcilationResource;
use App\Http\Resources\SharingResource;
use App\Models\Purse;
use App\Models\Radio;
use App\Models\Reconcilation;
use App\Models\SharingFormular;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReconcilationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $recons = Reconcilation::latest()->get();
        return ReconcilationResource::collection($recons);
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
        $purse = Purse::latest()->first();
        $recon = new Reconcilation();
        $recon->amount = $request->amount;
        $recon->radio_id = $request->radio_id;
        $recon->paid_by = auth()->user()->id;
        $recon->description = $request->description;
        $recon->staus = false;
        if($recon->save()){
            $purse->account_balance -= $recon->amount;
            $purse->save();
        }
        return new ReconcilationResource($recon);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reconcilation  $reconcilation
     * @return \Illuminate\Http\Response
     */
    public function show(Reconcilation $reconcilation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reconcilation  $reconcilation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reconcilation $reconcilation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reconcilation  $reconcilation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $reconcilation)
    {
        //
        Reconcilation::whereId($reconcilation)->update($request->except(['_token','id']));
        return response()->json(['msg'=>'Updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reconcilation  $reconcilation
     * @return \Illuminate\Http\Response
     */
    public function destroy( $reconcilation)
    {
        //
        $r = Reconcilation::find($reconcilation);
        $r->delete();
        return;
    }

    public function approveRecon($id){
        $recon = Reconcilation::find($id);
        if($recon->staus != true){
            $recon->status = true;

            if ($recon->save()) {
                $radio = Radio::where('user_id', auth()->user()->id)->first();
                $radio->acct_bal += $recon->amount;

            }
        }

    }
    public function allSharingFormular(){
        $shares = SharingFormular::all();
        return SharingResource::collection($shares);
    }
    public function sharingFormular(Request $request){
        $share = new SharingFormular();
        $share->radio_id = $request->radio_id;
        $share->formular_admin = $request->formular_admin;
        $share->formular_radio = $request->formular_radio;
        $share->bio = $request->bio;
        $share->save();
        return new SharingResource($share);
    }
    public function updateFormular(Request $request,$id){
        $share = SharingFormular::find($id);
        $share->formular_admin = $request->formular_admin;
        $share->formular_radio = $request->formular_radio;
        $share->bio = $request->bio;
        $share->save();
        return new SharingResource($share);
    }
}


