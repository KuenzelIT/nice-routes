<?php namespace KuenzelIT\NiceRoutes;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class NiceRoutesServiceProvider extends ServiceProvider
{
    /**
     * Boot.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'NiceRoutes');

        $this->mergeConfigFrom(
            __DIR__ . '/config.php', 'nice-routes'
        );

        $this->publishes([
            __DIR__ . '/config.php' => config_path('nice-routes.php')
        ]);

        Route::get(config('nice-routes.url'), [
            'middleware' => config('nice-routes.middleware'),
            'as' => 'nice-routes',
            'uses' => 'KuenzelIT\NiceRoutes\Controllers\NiceRoutesController@routes'
        ]);
    }
}
