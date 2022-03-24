<?php

namespace App\Http\Controllers\Mobile\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Management\People\MemberController;
use App\Http\Resources\MemberResource;
use App\Models\Church;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function update_user(Request $request, $slug)
    {
        $user = auth()->user();
        $church = Church::get_church($slug);
        $member = $church->members()->where('user_id', $user->id)->firstOrFail();
        $request->validate([
            'first_name' => 'filled|string',
            'last_name' => 'filled|string',
            'email' => [
                'filled',
                'email',
                Rule::unique('users', 'email')->ignore($user->id)
            ],
            'phone' => [
                'filled',
                'string',
                'min:11',
                Rule::unique('users', 'phone')->ignore($user->id)
            ],
            'gender' => 'filled|string|in:male,female',
            'date_of_birth' => 'filled|date_format:Y-m-d',
            'country' => 'filled|string',
            'relationship' => 'filled|string|in:single,married',
            'date_of_marriage' => 'nullable|date_format:Y-m-d',
            'residential_area' => 'filled|string',
            'address' => 'filled|string',
            'nearest_bus_stop' => 'filled|string',
            'occupation' => 'filled|string',
            'profile' => 'filled|image',
        ]);
        $data = $request->only([
                'phone'
            ]) + [
                'name' => $request->first_name . ' ' . $request->last_name
            ];

        $user->update($data);

        if ($request->has('email') && $request->email !== $user->email) {
            $user->update([
                'email' => $request->email,
                'email_verified_at' => null
            ]);
            $user->fresh()->sendEmailVerificationNotification();
        }

        $data = $request->only([
            'gender',
            'date_of_birth',
            'country',
            'relationship',
            'date_of_marriage',
            'residential_area',
            'address',
            'nearest_bus_stop',
        ]);
        if ($user->personal_details) {
            $user->personal_details->update($data);
        } else {
            $user->personal_details()->create($data);
        }

        if ($request->has('profile')) {
            MemberController::update_member_profile($church, $member, $request);
        }

        $member->load('user.personal_details');
        return response()->json([
            'status' => 'success',
            'message' => 'User updated successfully',
            'data' => new MemberResource($member)
        ]);
    }

    public function update_password(Request $request, $slug)
    {
        $request->validate([
            'password' => 'filled|string|min:8|confirmed',
        ]);

        $user = auth()->user();

        if ($request->has('password')) {
            $user->update([
                'password' => Hash::make($request->password)
            ]);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Password updated successfully',
        ]);
    }
}
