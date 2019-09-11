<?php

namespace iraj\faq;

use Illuminate\Support\ServiceProvider;
use function public_path;

class FaqServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'faq');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/faq'),
            __DIR__ . '/css/style.css' => public_path('css/style.css'),
            __DIR__ . '/css/fonts' => public_path('css/fonts'),
        ]);

    }

    public function register()
    {

    }
}