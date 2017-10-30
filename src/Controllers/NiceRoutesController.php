<?php namespace KuenzelIT\NiceRoutes\Controllers;

use Closure;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

/**
 * Created by PhpStorm.
 * User: kuenzel
 * Date: 30.10.17
 * Time: 13:06
 */
class NiceRoutesController
{
    public function routes()
    {
        $middlewareClosure = function ($middleware) {
            return $middleware instanceof Closure ? 'Closure' : $middleware;
        };

        $methodColors = [
            'GET' => 'success',
            'HEAD' => 'default',
            'POST' => 'primary',
            'PUT' => 'warning',
            'PATCH' => 'info',
            'DELETE' => 'danger'
        ];

        return new Response(view('NiceRoutes::routes', [
            'routes' => Route::getRoutes(),
            'middlewareClosure' => $middlewareClosure,
            'methodColors' => $methodColors
        ]));
    }
}