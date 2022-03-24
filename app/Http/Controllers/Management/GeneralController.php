<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Mail\ContactForm;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GeneralController extends Controller
{
    //
    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'filled|email',
            'phone' => 'filled|string|min:11',
            'church_name' => 'filled|string',
            'church_address' => 'filled|string',
            'position' => 'filled|string',
            'subject' => 'required|string',
            'message' => 'required|string'
        ]);

        $data = $request->all() + ['subject' => "CHURCHVEST: " . $request->subject];

        Mail::to(config('mail.reply_to.address'))->send(new ContactForm($data));
        return response()->json(['status' => 'success']);
    }

    public function add_subscriber(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $client = new Client();

        $options = [
            'headers' => [
                'content-type' => "application/json",
                'Authorization' => 'apikey ' . config('mail.mailchimp_api')
            ],
            'json' => [
                "email_address" => $request->email,
                "status" => "subscribed",
            ]
        ];

        $url = "https://us10.api.mailchimp.com/3.0/lists/" . config('mail.mailchimp_list_id') . "/members";

        try {
            $response = $client->request('POST', $url, $options);
            return response()->json(['status' => 'success', 'message' => "You've been subscribed successfully"]);
        } catch (\Exception $e) {
            return ["message" => $e->getMessage(), "status" => "failed"];
        } catch (GuzzleException $e) {
            return response()->json(['status' => 'success', 'message' => 'User is already subscribed']);
        }
    }
}
