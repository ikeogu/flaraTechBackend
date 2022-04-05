<?php

use App\Http\Resources\UserResource;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function () {


    /*Management Routes*/
    Route::group(['prefix' => 'management', 'namespace' => 'Management'], function () {
        /*Onboarding Routes*/

        Route::post('/register_admin', 'Auth\AuthController@registerAdmin');
        Route::post('/register_artist', 'Auth\AuthController@registerArtist');
        Route::post('/register_radio', 'Auth\AuthController@registerRadio');
        Route::post('/login', 'Auth\AuthController@login');

        /*Password Reset Routes*/
        Route::post('forgot-password', function (Request $request) {

            $request->validate(['email' => 'required|email']);

            $status = Password::sendResetLink(
                $request->only('email')
            );

            return $status === Password::RESET_LINK_SENT
                ? response()->json(['status' => 'success', 'message' => "Password reset link sent successfully"])
                : response()->json(['status' => 'failed', 'message' => __($status)], 403);
        })->middleware('guest')->name('password.email');

        Route::get('reset-password/{token}', function ($token) {
        })->middleware('guest')->name('password.reset');

        Route::post('reset-password', function (Request $request) {
            $request->validate([
                'token' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:8|confirmed',
            ]);

            $status = Password::reset(
                $request->only('email', 'password', 'password_confirmation', 'token'),
                function ($user, $password) use ($request) {
                    $user->forceFill([
                        'password' => Hash::make($password)
                    ])->setRememberToken(Str::random(60));

                    $user->save();

                    event(new PasswordReset($user));
                }
            );

            return $status == Password::PASSWORD_RESET
                ? response()->json(['status' => 'success', 'message' => "Password reset successfully"])
                : response()->json(['status' => 'failed', 'message' => __($status)], 403);
        })->middleware('guest')->name('password.update');
        /*End Password Reset Routes*/
        /*End Onboarding Routes*/



        /*Authenticated Routes*/
        Route::group(['middleware' => 'auth:api'], function () {
            // Profile Routes
            Route::get('/profile', 'Auth\AuthController@profile');
            Route::post('/profile_update', 'User\UserController@update_user');
            Route::get('list_of_radio_stations', 'User\UserController@list_of_radio_stations');
            Route::get('list_of_artists', 'User\UserController@list_of_artists');
            Route::post('logout', 'Auth\AuthController@logout');
            Route::post('add_radio_station', 'Auth\AuthController@add_radio_station');
            /*Email Verification Routes*/
            Route::group(['prefix' => 'email', 'as' => 'verification.'], function () {
                Route::get('/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
                    $request->fulfill();
                    $user = auth()->user();
                    return response()->json([
                        'status' => 'success',
                        'data' => new UserResource($user),
                    ]);
                })->middleware(['signed'])->name('verify');

                Route::post('/verification-notification', function (Request $request) {
                    $request->user()->sendEmailVerificationNotification();

                    return response()->json(['status' => 'success']);
                })->middleware(['throttle:6,1'])->name('send');
            });
            //Media routes
            Route::group(['prefix' => 'media', 'namespace' => 'Media',], function () {
                // Route::get('{type}', 'MediaController@get_all_media');
                Route::post('upload_media', 'MediaController@upload_media');
                Route::get('artiste_track_list', 'MediaController@myPlayList');
                Route::post('{media}/download/{media_id}', 'MediaController@download_media');
                Route::post('{media}/update', 'MediaController@update_media');
                Route::post('delete', 'MediaController@delete_media');
                Route::get('get_all_track', 'MediaController@get_all_media');
                Route::get('promoting_track/{id}','MediaController@accept_track');
                Route::get('reject_track/{id}', 'MediaController@reject_track');
                Route::get('promote_track/{id}', 'MediaController@promote_track');
                Route::get('promoted_tracks', 'MediaController@promoted_tracks');

                Route::group(['prefix' => 'trash'], function () {
                    Route::get('{type}', 'MediaController@get_all_trash');

                    Route::post('restore', 'MediaController@restore_trash');
                    Route::post('delete', 'MediaController@delete_trash');
                });
            });
            // Dashboard routes
            Route::get('dashboard', 'User\UserController@Dashboard');
            // payment routes
            // Laravel 8
            Route::post('/pay', [App\Http\Controllers\PaymentController::class, 'redirectToGateway'])->name('pay');
        });
        /*End Authenticated Routes*/
    });
    /*End Management Routes*/
});
