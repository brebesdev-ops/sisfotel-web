<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
        Gate::define('isKasi', function($user) {
            return $user->role == 'kasi';
         });
    
         Gate::define('isKabid', function($user) {
             return $user->role == 'kabid';
         });
    
         Gate::define('isKepala', function($user) {
             return $user->role == 'kepala';
         });
    }
}
