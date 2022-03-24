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
        try {
            $response = $client->request('GET', config('paystack.paymentUrl') . "/transaction/verify/$ref", $options);
            return json_decode($response->getBody(), true);
        } catch (Exception $e) {
            return ["error" => $e->getMessage(), "status" => false];
        } catch (GuzzleException $e) {
            return ["error" => $e->getMessage(), "status" => false];
        }
    }

    public static function resolve_account($nuban, $code){
        $client = new Client();
        $options = [
            'headers' => [
                'Authorization' => "Bearer " . config('paystack.secretKey')
            ],

            'query' => [
                'account_number' => $nuban,
                'bank_code' => $code
            ]
        ];

        try {
            $response = $client->request('GET', config('paystack.paymentUrl') . "/bank/resolve", $options);
            return json_decode($response->getBody(), true);
        } catch (Exception $e) {
            return ["error" => $e->getMessage(), "status" => false];
        } catch (GuzzleException $e) {
            return ["error" => $e->getMessage(), "status" => false];
        }
    }

    public static function create_recepient($name, $nuban, $code){
        $client = new Client();
        $options = [
            'headers' => [
                'Authorization' => "Bearer " . config('paystack.secretKey'),
            ],

            'json' => [
                'type' => 'nuban',
                'name' => $name,
                'account_number' => $nuban,
                'bank_code' => $code
            ]
        ];

        try {
            $response = $client->request('POST', config('paystack.paymentUrl') . "/transferrecipient", $options);
            return json_decode($response->getBody(), true);
        } catch (Exception $e) {
            return ["error" => $e->getMessage(), "status" => false];
        } catch (GuzzleException $e) {
            return ["error" => $e->getMessage(), "status" => false];
        }
    }

    public static function create_plan($plan){
        $client = new Client();
        $options = [
            'headers' => [
                'Authorization' => "Bearer " . config('paystack.secretKey'),
            ],

            'json' => [
                'name' => $plan['name'],
                'amount' => $plan['amount'] * 100,
                'interval' => $plan['interval']
            ]
        ];

        try {
            $response = $client->request('POST', config('paystack.paymentUrl') . "/plan", $options);
            return json_decode($response->getBody(), true);
        } catch (Exception $e) {
            Log::error($e->getMessage(), ["Paystack Plan Create"]);
            return ["error" => $e->getMessage(), "status" => false];
        } catch (GuzzleException $e) {
            Log::error($e->getMessage(), ["Paystack Plan Create"]);
            return ["error" => $e->getMessage(), "status" => false];
        }
    }
}
