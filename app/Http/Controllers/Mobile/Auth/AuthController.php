<?php

namespace App\Http\Controllers\Mobile\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Management\Message\SmsController;
use App\Http\Resources\UserResource;
use App\Mail\Otp;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    //
    public function resolve_user(Request $request)
    {
        $request->validate([
            'email_phone' => 'required|string'
        ]);

        $user = User::with('memberships')
            ->where('email', $request->email_phone)
            ->orWhere('phone', $request->email_phone)
            ->first();

        if (!$user) {
            return response()->json([
                'status' => 'failed',
                'message' => "Phone or email not found. Please contact your church administrator"
            ], 401);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'User Found',
            'data' => new UserResource($user)
        ]);

    }

    public function login(Request $request)
    {
        $request->validate([
            'email_phone' => 'required|string',
            'password' => 'required|string',
            'device_id' => 'required|string',
        ]);

        $user = User::where('email', $request->email_phone)
            ->orWhere('phone', $request->email_phone)
            ->first()->makeVisible(['password']);

        if (!$user) {
            return response()->json([
                'status' => 'failed',
                'message' => "Phone or email not found. Please contact your church administrator"
            ], 401);
        }

        if (!$user->password) {
            $request->validate([
                'password' => 'min:8|confirmed'
            ]);

            $user->update([
                'password' => Hash::make($request->password)
            ]);
        } else {
            if (!Hash::check($request->password, $user->password)) {
                return response()->json([
                    'status' => 'failed',
                    'message' => "Incorrect credentials"
                ], 401);
            }
        }

        $token = auth()->fromUser($user);

        if (!$user->last_device == $request->device_id) {
            static::send_otp($user);
        }

        return response()->json([
            'status' => 'success',
            'data' => new UserResource($user),
            'access_token' => $token,
            'token_type' => 'bearer',
            'device_verified' => $user->last_device == $request->device_id
        ]);

    }

    public static function send_otp($user)
    {
        $digits = 5;
        $token = str_pad(rand(0, pow(10, $digits) - 1), $digits, '0', STR_PAD_LEFT);
        $otp = $user->otp()->updateOrCreate(
            [
                'user_id' => $user->id
            ],
            [
                'token' => $token,
                'expires_at' => now()->addMinutes(5)->toDateTimeString(),
            ]);

        if ($user->email) {
            Mail::to($user->email)->queue(new Otp($otp));
        }
        if ($user->phone) {
            $expires_at = Carbon::make($otp->expires_at)->toDateTimeString();
            SmsController::send_sms('CHURCHVEST', $user->phone, "Your one time verification password is $token. It expires at $expires_at.");
        }
    }

    public function verify_otp(Request $request)
    {
        $request->validate([
            'otp' => 'required|string|min:5',
            'device_id' => 'required|string',
        ]);
        $expiry_time = 5; // minutes
        $user = auth()->user();
        $otp = $user->otp()->latest('created_at')->first();
        if (!$otp || $request->otp !== $otp->token) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Invalid token'
            ], 403);
        }

        if (Carbon::make($otp->expires_at)->diffInMinutes(now()) > $expiry_time) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Token expired'
            ], 403);
        }

        $user->update([
            'last_device' => $request->device_id
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Token verification successful'
        ]);
    }

    public function resend_otp()
    {
        $user = auth()->user();
        static::send_otp($user);
        return response()->json([
            'status' => 'success',
            'message' => 'OTP sent successfully'
        ]);
    }
}
