<?php

namespace App\Http\Controllers\Management\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Profile;

class AuthController extends Controller
{
    public function registerAdmin(Request $request)
    {
        return $this->register($request, 1);
    }
    public function registerArtist(Request $request)
    {
        return $this->register($request, 2);
    }
    public function registerRadio(Request $request)
    {
        return $this->register($request, 3);
    }
    public function register($request,$role_id)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'status' => $role_id==1? true:false,
            'role_id'=> $role_id,
            'password' => Hash::make($request->password)
        ]);
        Profile::updateOrCreate([
            'user_id' => $user->id
        ]);

        $token = auth()->login($user);
        event(new Registered($user));

        return $this->respondWithToken($token);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only(['email', 'password']);
        $token = auth()->attempt($credentials);
        if (!$token) {
            return response()->json(['error' => 'Incorrect Username or Password'], 401);
        }

        return $this->respondWithToken($token);
    }

    protected function respondWithToken($token)
    {
        $user = auth()->user();
        // $user->load('memberships.church.subscription.plan');
        return response()->json([
            'status' => 'success',
            'data' => new UserResource($user),
            'access_token' => $token,
            'token_type' => 'bearer',
        ]);
    }

    public function profile(){
        return new UserResource(auth()->user());
    }
    public function logout(){
        auth()->logout();
        return response()->json(['message' => 'User successfully signed out']);

    }
}
