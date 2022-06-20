<?php

namespace App\Providers;

use App\Models\User;
use App\Models\ClinicSetup;
use Illuminate\Support\Facades\View;
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
        if(Schema::hasTable('clinic_setups'))
        {
            View::share('klinic', ClinicSetup::first());
        }
        
    }
}
