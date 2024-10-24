<?php

namespace App\Providers;

use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(UrlGenerator $url): void
    {
        if(env('APP_ENV') !== 'local')
        {
            $url->forceScheme('https');
        }
        $defaultTitle = "Home";
        $defaultDescription = 'Eric Solutions offers advantage of one stop solution by offering Management systems such as Clinical Trial Management Software.';
        View::share('title', $defaultTitle);
        View::share('metaDescription', $defaultDescription);
    }
}
