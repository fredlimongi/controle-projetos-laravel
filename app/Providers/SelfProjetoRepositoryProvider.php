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

        $this->app->bind(
            \SelfProjeto\Repositories\ProjetoRepository::class,
            \SelfProjeto\Repositories\ProjetoRepositoryEloquent::class
        );

        $this->app->bind(
            \SelfProjeto\Repositories\ProjetoNotasRepository::class,
            \SelfProjeto\Repositories\ProjetoNotasRepositoryEloquent::class
        );
    }
}
