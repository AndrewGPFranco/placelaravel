<?php

namespace App\Providers;

use App\Repositories\SerieRepositoryEloquent;
use App\Repositories\SerieRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(SerieRepositoryInterface::class, SerieRepositoryEloquent::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
