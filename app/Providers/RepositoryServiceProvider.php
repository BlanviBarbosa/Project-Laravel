<?php

namespace ProjectLaravel\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind(\ProjectLaravel\Repositories\ProjectRepository::class, \ProjectLaravel\Repositories\ProjectRepositoryEloquent::class);
        //:end-bindings:
    }
}
