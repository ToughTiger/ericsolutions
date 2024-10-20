<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class CheckCookiePreferences
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $marketing = Cookie::get('marketing_cookies');
        $facebook = Cookie::get('facebook_cookies');
        $twitter = Cookie::get('twitter_cookies');
        $googleAnalytics = Cookie::get('google_analytics_cookies');

        // You can use these values to conditionally load scripts or make decisions
        view()->share('cookiePreferences', [
            'marketing' => $marketing,
            'facebook' => $facebook,
            'twitter' => $twitter,
            'google_analytics' => $googleAnalytics
        ]);
        return $next($request);
    }
}
