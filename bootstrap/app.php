<?php

use App\Http\Middleware\AuthAdminOrStudent;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
    
    $app->routeMiddleware([
        'auth' => App\Http\Middleware\Authenticate::class,
        'auth_admin_student' => \App\Http\Middleware\AuthAdminOrStudent::class, // Register your custom middleware here
        // Add your custom middleware if necessary
    ]);

    $routeMiddleware = [
        'auth_admin_student' => \App\Http\Middleware\AuthAdminOrStudent::class,
        // Other middleware...
    ];

    $routeMiddleware = [
        // Other middleware...
        'auth.admin' => \App\Http\Middleware\AuthAdmin::class,
        'auth.student' => \App\Http\Middleware\AuthStudent::class,
    ];

    

    return $app;
