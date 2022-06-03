<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Resources\PurseResource;
use App\Mail\ContactForm;
use App\Models\Payment;
use App\Models\Purse;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Reconcilation;
use App\Models\SharingFormular;
use DB;

class GeneralController extends Controller
{
    //
    public function revenue(){
        $sumTotalIncome = Payment::where('status','SUCCESS')->where('summed',true)->sum('amount');
        $sumTotalIncom = Payment::where('status','SUCCESS')->where('summed',null)->get();
       
        foreach ($sumTotalIncom as  $value) {
            # code...
            $value->summed = true;
            $value->save();
        }
       
        $purse = new Purse();
        $purse->account_balance += $sumTotalIncome;
        
      return new PurseResource($purse);
    // return $sumTotalIncome;

    }
   
   public function radio_revenue(){
       $data = [
             
                'total_balance' => 0,
                'received_balance'=>0,
                'pending_balance' => 0
           ];
          
       $user = auth()->user();
       $formular =  SharingFormular::where('radio_id',$user->radio_details->id)->first()->formular_radio;
       $price = $user->radio_details->price;
       $songs = DB::table('media_radio')->where('radio_id',auth()->user()->radio_details->id)->where('status','promoted')->count();
       
       if($songs > 0 and $price > 0 ){
            $pending = ($price * $song) / $formular;
       
       $rev =  Reconcilation::where('radio',auth()->user()->radio_details->id)->where('status',1)->sum('amount');
       $data = [
                'total_balance' => $pending,
                'received_balance'=> $rev,
                'pending_balance' => $pending - $rev
           ];
       }
      
       
       return $data;
       
   }

}
