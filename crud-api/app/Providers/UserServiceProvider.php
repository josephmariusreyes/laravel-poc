<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Contracts\UserServiceInterface;
use App\Services\UserService;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // TODO: Register the UserService as scoped
        // This will ensure that the same instance is used throughout a single request
        // but new instances are created for each request
        $this->app->scoped(UserServiceInterface::class, UserService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // TODO: Add any bootstrapping logic if needed
        // This could include setting up event listeners, 
        // middleware, or other service configurations
    }
}