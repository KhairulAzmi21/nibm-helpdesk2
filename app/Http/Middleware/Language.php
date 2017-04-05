<?php 
namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Cookie;

class Language
{
    public function handle($request, Closure $next)
    {
        if(Cookie::get('applocale')){
        $value = Cookie::get('applocale');
        App::setLocale($value);
        }
        // if (Session::has('applocale')) {
        //     App::setLocale(Session::get('applocale'));
        // }
        // else { // This is optional as Laravel will automatically set the fallback language if there is none specified
        //     App::setLocale(Config::get('app.fallback_locale'));
        // }
        return $next($request);
    }
}