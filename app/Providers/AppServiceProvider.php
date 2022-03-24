<?php

namespace App\Providers;

use App\Models\Account;
use App\Models\FinancialAccount;
use Illuminate\Database\Eloquent\Relations\Relation;
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
        Relation::morphMap([
            'giving' => Account::class,
            'financial' => FinancialAccount::class,
        ]);
    }
}
