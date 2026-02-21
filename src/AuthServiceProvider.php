<?php

namespace SangamTechnical\AuthPackage;

use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/views', 'authpackage');

        // Publish assets if needed
        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/authpackage'),
        ]);
    }

    public function register()
    {
        //
    }
}
