<?php

namespace RestechDev\CombinationGenerate\Providers;

use RestechDev\CombinationGenerate\Services\CombinationService;
use Illuminate\Support\ServiceProvider;

class CombinationServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Code to bootstrap services if needed
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CombinationService::class, function ($app) {
            return new CombinationService();
        });
    }
}
