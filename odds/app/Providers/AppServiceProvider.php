<?php

namespace App\Providers;

use App\Repositories\OddTable\OddTableRepository;
use App\Repositories\OddTable\OddTableRepositoryEloquent;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(OddTableRepository::class, OddTableRepositoryEloquent::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
    }
}
