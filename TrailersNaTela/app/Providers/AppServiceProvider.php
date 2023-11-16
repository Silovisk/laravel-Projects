<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */

    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    public function boot()
    {
        Schema::defaultStringLength(191);

        // Defina o formato de data e hora do SQL Server
        config(['database.connections.sqlsrv.options' => [\PDO::ATTR_STRINGIFY_FETCHES => true]]);
    }
}
