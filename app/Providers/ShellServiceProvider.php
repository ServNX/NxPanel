<?php

namespace App\Providers;

use App\Shell\ShellContract;
use Illuminate\Support\ServiceProvider;

class ShellServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            ShellContract::class,
            'App\\Shell\\' . config('install.os') . '\\Shell'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
