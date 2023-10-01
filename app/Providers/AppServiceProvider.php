<?php

namespace App\Providers;

use App\Repositories\SeriesRepositoryEloquent;
use App\Repositories\SerieRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(SerieRepositoryInterface::class, SeriesRepositoryEloquent::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
