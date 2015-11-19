<?php

namespace SelfProjeto\Providers;

use Illuminate\Support\ServiceProvider;

class SelfProjetoRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \SelfProjeto\Repositories\ClienteRepository::class,
            \SelfProjeto\Repositories\ClienteRepositoryEloquent::class
        );
    }
}
