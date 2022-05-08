<?php

namespace App\Providers;

use App\Models\Account;
use App\Models\FinancialAccount;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Notifications\ResetPassword;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        ResetPassword::createUrlUsing(function ($notifiable, $token,$email) {
            return "https://craxet.com/flaretech/#/auth/passwords/enter-code/{$token}/{$email}";
        });
    }
}
