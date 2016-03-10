<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        $this->app->bind(
          'App\AETR\Repositories\Contracts\IViaturasRepository',
          'App\AETR\Repositories\ViaturasRepository'
        );

        $this->app->bind(
            'App\AETR\Repositories\Contracts\INaturezasRepository',
            'App\AETR\Repositories\NaturezasRepository'
        );
    }
}
