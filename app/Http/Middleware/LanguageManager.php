<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LanguageManager
{
   /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Set Locale in this "Request"
        $locale = $request->session()->get('locale') ?? 'en';
        app()->setLocale($locale);

        return $next($request);
    }
}