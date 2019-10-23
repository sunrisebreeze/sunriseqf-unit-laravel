<?php
namespace Sunriseqf\JunitLaravel\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
class JunitServiceProvide extends ServiceProvider
{
    public function boot()
    {
        $this->registerRoutes();

        $this->loadViewsFrom(
            __DIR__.'/../../resources/views', 'junit'
        );
    }

    private function routeConfiguration()
    {
        return [
            'namespace' => 'Sunriseqf\JunitLaravel\Http\Controllers',
            'prefix' => 'junit',
            'middleware' => 'web',
        ];
    }
    private function registerRoutes()
    {
        Route::group(
            $this->routeConfiguration(),
            function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }
}