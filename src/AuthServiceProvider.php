<?php

namespace SangamTechnical\AuthPackage;

use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        // Load views from the correct path and map to 'auth' namespace
        $this->loadViewsFrom(__DIR__ . '/../views', 'auth');

        // Optional: publish views to host project
        $this->publishes([
            __DIR__ . '/../views' => resource_path('views/vendor/auth'),
        ], 'auth-views');
    }

    public function register()
    {
        //
    }
}
