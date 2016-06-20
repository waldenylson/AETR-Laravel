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
        $this->registerRepositories();
    }

    public function registerRepositories()
    {
        $repos = [
            \App\AETR\Contracts\ViaturasRepository::class      =>  \App\AETR\Repositories\ViaturasRepository::class,
            \App\AETR\Contracts\NaturezasRepository::class     =>  \App\AETR\Repositories\NaturezasRepository::class,
            \App\AETR\Contracts\EquipeServicoRepository::class =>  \App\AETR\Repositories\EquipeServicoRepository::class,
            \App\AETR\Contracts\RequisicoesRepository::class =>  \App\AETR\Repositories\RequisicoesRepository::class,
        ];

        foreach ($repos as $contract => $repo)
        {
            $this->app->singleton($contract, $repo);
        }
    }
}
