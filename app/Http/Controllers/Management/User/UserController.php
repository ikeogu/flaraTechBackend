<?php

namespace App\Http\Controllers\Management\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\AdminResource;
use App\Http\Resources\ArtisteResource;
use App\Http\Resources\ProfileResource;
use App\Http\Resources\RadioResource;
use App\Http\Resources\TrackList;
use App\Models\Profile;
use App\Models\Radio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function update_user(Request $request)
    {
        $user = auth()->user();


        $request->validate([
            'name'=> 'filled|string',
            'record_label' => 'filled|string',
            'stage_name' => 'filled|string',
            'twitter_handle' => 'filled|string',
            'instagram' => 'filled|string',
            'phone_number'=> 'filled|string',
            'image' => 'filled|image',
            // 'password' => 'filled|string|min:8|confirmed',
        ]);

        if ($request->has('email') && $request->email !== $user->email) {
            $user->update([
                'email' => $request->email,
                'email_verified_at' => null
            ]);
            $user->fresh()->sendEmailVerificationNotification();
        }
        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images', $filename, 'public');
             $user->role_id == 2 ?Profile::whereId('user_id',$user->id)->update(['image' => $filename]): Radio::whereId('user_id', $user->id)->update(['logo' => $filename]);
        }
       if ($user->role_id ==3){
          $r = Radio::where('user_id', $user->id)->first();
          $r->price = $request->price;
          $r->acct_bal = $request->acct_bal;
          $r->state = $request->state;
          $r->save();
            $user->status = true;
            $user->name = $request->name;
            $user->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Profile updated successfully',
                'data' => new RadioResource($r)
            ]);

       }else{
            $pro = Profile::where('user_id', $user->id)->first();
            $pro->record_label = $request->record_label;
            $pro->stage_name = $request->stage_name;
            $pro->twitter_handle = $request->twitter_handle;
            $pro->instagram = $request->instagram;
            $pro->phone_number = $request->phone_number;
            $pro->account_name = $request->account_name;
            $pro->account_number = $request->account_number;
            $pro->bank = $request->bank;

            $user->status = true;
            $user->name = $request->name;
            $user->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Profile updated successfully',
                'data' => new ProfileResource($pro)
            ]);
       }



    }
    public function update_artist_radio(Request $request,$id)
    {
        $user = User::find($id);


        $request->validate([
            'name'=> 'filled|string',
            'record_label' => 'filled|string',
            'stage_name' => 'filled|string',
            'twitter_handle' => 'filled|string',
            'instagram' => 'filled|string',
            'phone_number'=> 'filled|string',
            'image' => 'filled|image',
            // 'password' => 'filled|string|min:8|confirmed',
        ]);

        if ($request->has('email') && $request->email !== $user->email) {
            $user->update([
                'email' => $request->email,
                'email_verified_at' => null
            ]);
            $user->fresh()->sendEmailVerificationNotification();
        }
        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images', $filename, 'public');
             $user->role_id == 2 ?Profile::whereId('user_id',$user->id)->update(['image' => $filename]): Radio::whereId('user_id', $user->id)->update(['logo' => $filename]);
        }
       if ($user->role_id ==3){
          $r = Radio::where('user_id', $user->id)->first();
          $r->price = $request->price;
          $r->acct_bal = $request->acct_bal;
          $r->state = $request->state;
          $r->save();
            $user->status = true;
            $user->name = $request->name;
            $user->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Profile updated successfully',
                'data' => new RadioResource($r)
            ]);

       }else{
            $pro = Profile::where('user_id', $user->id)->first();
            $pro->record_label = $request->record_label;
            $pro->stage_name = $request->stage_name;
            $pro->twitter_handle = $request->twitter_handle;
            $pro->instagram = $request->instagram;
            $pro->phone_number = $request->phone_number;
            $pro->account_name = $request->account_name;
            $pro->account_number = $request->account_number;
            $pro->bank = $request->bank;

            $user->status = true;
            $user->name = $request->name;
            $user->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Profile updated successfully',
                'data' => new ProfileResource($pro)
            ]);
       }



    }
    public function Dashboard(){
       $user = auth()->user();
       if($user->role_id ==1 ){
          return new  AdminResource($user);
       }elseif($user->role_id == 2){
            return new ArtisteResource($user);
       }else{
            return new RadioResource($user);
       }
    }
    public function list_of_radio_stations(){
        $stations = User::where('role_id',3)->with('personal_details')->get();
        return RadioResource::collection($stations);
    }
    public function list_of_artists()
    {
        $stations = User::where('role_id', 2)->with('personal_details')->get();
        return ArtisteResource::collection($stations);
    }


}
