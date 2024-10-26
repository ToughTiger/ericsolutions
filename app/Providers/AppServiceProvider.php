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
        };

        View::composer('*', function ($view) {
            if (!isset($view->getData()['meta'])) {
                $view->with('meta', [
                    'title' => 'Eric Solutions - Clinical Trial Experts',
                    'keywords' => 'clinical trials, EDC, CTMS, eTMF, IRT, Eric Solutions',
                    'description' => 'Eric Solutions offers advanced clinical trial management services like EDC, CTMS, eTMF, and IRT solutions for efficient trial execution.'
                ]);
            }
        });

    }
}
