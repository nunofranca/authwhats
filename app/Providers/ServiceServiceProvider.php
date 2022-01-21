<?php

namespace App\Providers;

use App\Services\Apis\MkauthService;
use App\Services\Apis\MkauthServiceInterface;
use App\Services\Apis\WhatsApp\WhatsService;
use App\Services\Apis\WhatsApp\WhatsServiceInterface;
use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MkauthServiceInterface::class, MkauthService::class);
        $this->app->bind(WhatsServiceInterface::class, WhatsService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
