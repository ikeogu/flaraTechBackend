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
        $recons = Reconcilation::latest()->paginate(100);
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
        
        $recon = new Reconcilation();
        $recon->amount = $request->amount;
        $recon->radio_id = $request->radio_id;
        $recon->media_id = $request->media_id;
        $recon->paid_by = auth()->user()->id;
        $recon->description = $request->description;
        $recon->status = false;
        if ($request->hasFile('image_prove')) {
                $file = $request->file('image_prove');
                $file_name = "Payment_prove".date('YmdHi').$file->getClientOriginalName();
                $path = 'flaretech_uploads/uploads/payment_proves/'.$file_name;
                File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
                $file->move($path, $file_name);
                $recon->image_prove;
               
            }
         
        $recon->save();
            
        
        return new ReconcilationResource($recon);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reconcilation  $reconcilation
     * @return \Illuminate\Http\Response
     */
    public function show($reconcilation)
    {
        //
        $r = Reconcilation::find($reconcilation);
        
         return new ReconcilationResource($r);
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
       $r = Reconcilation::find($reconcilation);
       $r->amount =  $request->amount;
       $r->radio_id = $request->radio_id;
       $r->media_id = $request->media_id;
       $r->description = $request->description;
     
        if ($request->hasFile('image_prove')) {
                $file = $request->file('image_prove');
                $file_name = "Payment_prove".date('YmdHi').$file->getClientOriginalName();
                $path = 'flaretech_uploads/uploads/payment_proves/'.$file_name;
                File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
                $file->move($path, $file_name);
                $r->image_prove = $path;
               
            }
       
        $r->save();
       
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
        return response()->json([
            'status'=>'deleted'
            ]);
    }

    public function approveRecon($id){
        $recon = Reconcilation::find($id);
        if($recon->status != true){
            $recon->status = true;
            $recon->updated_at = date('Y-m-d');

            if ($recon->save()) {
                $purse = Purse::latest()->first();
                $radio = Radio::where('user_id', auth()->user()->id)->first();
                $radio->acct_bal += $recon->amount;
                
                $purse->account_balance -= $recon->amount;
                $purse->save();
                DB::table('radio_paid')->insert([
                    'balance'=> $purse->account_balance -= $recon->amount,
                    'radio_id'=>$radio->id,
                    'amount_paid' => $recon->amount,
                    'created_at'=> date('Y-m-d H:i:s'),
                    'updated_at'=>  date('Y-m-d H:i:s')
                ]);
            }
        }

    }
    
    
    public function allSharingFormular(){
        $shares = SharingFormular::latest()->get();
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
    public function showsharing($id){
        $share = SharingFormular::find($id);
          return new SharingResource($share);
    }
      public function getReconcilationByRadio(){
        $radio = Radio::where('user_id', auth()->user()->id)->first();
        $recons = Reconcilation::where('radio_id',$radio->id)->get();
        return ReconcilationResource::collection($recons);
    }
}


