<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PaystackController extends Controller
{
    //
    public static function verify($ref)
    {
        $client = new Client();
        $options = [
            'headers' => [
                'Authorization' => "Bearer " . config('paystack.secretKey')
            ],
        ];
        // dd($options);
        try {
            $response = $client->request('GET', config('paystack.paymentUrl') . "/transaction/verify/$ref", $options);
            return json_decode($response->getBody(), true);
        } catch (Exception $e) {
            return ["error" => $e->getMessage(), "status" => false];
        } catch (GuzzleException $e) {
            return ["error" => $e->getMessage(), "status" => false];
        }
    }

   
}
