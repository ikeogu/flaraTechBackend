<?php

namespace App\Http\Controllers\Mobile\Mail;

use App\Http\Controllers\Controller;
use App\Mail\ContactForm;
use App\Models\Church;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //

    public function send_mail(Request $request, $slug)
    {
        $request->validate([
            'subject' => 'required|string',
            'message' => 'required|string'
        ]);

        $user = auth()->user();
        $church = Church::get_church($slug);

        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'phone' => $user->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ];
        $admins = $church->members()->with('user')->whereIn('role', ['admin', 'super_admin'])->get();

        foreach ($admins as $admin) {
            if (!$admin->user->email) continue;
            Mail::to($admin->user->email)->queue(new ContactForm($data));
        }

        return response()->json(['status' => 'success']);
    }
}
