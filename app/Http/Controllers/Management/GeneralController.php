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

class GeneralController extends Controller
{
    //
    public function revenue(){
        $sumTotalIncome = Payment::where('status','SUCCESS')->where('summed',false)->sum('amount');
        $purse = new Purse();
        $purse->account_balance += $sumTotalIncome;
        if($purse->save()){
            foreach ($sumTotalIncome as  $value) {
                # code...
                $value->summed = true;
                $value->save();
            }
        }
       return new PurseResource($purse);

    }
   

}
