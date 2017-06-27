<?php

namespace SMDRide\Providers;

use Illuminate\Support\ServiceProvider;
use SMDRide\Carpooling\Contracts\IRidesRepository;
use SMDRide\Carpooling\RidesManager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IRidesRepository::class, RidesManager::class);
    }
}
