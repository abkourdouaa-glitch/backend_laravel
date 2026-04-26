<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        api: __DIR__.'/../routes/api.php',
    )

    ->withMiddleware(function (Middleware $middleware): void {
    //     $middleware->alias([
    //     'check.age' => \App\Http\Middleware\CheckAge::class,
    // ]);


        // $middleware->statefulApi();
        // $middleware->alias([
        //     'role' => \App\Http\Middleware\CheckRole::class,
        // ]);


        $middleware->validateCsrfTokens(except: [
        'api/inscription-association', // <--- Zidi hada ghir bach n-t-7eqqo
    ]);
        $middleware->validateCsrfTokens(except: [
        'api/dashboard-benevole', // <--- Zidi hada ghir bach n-t-7eqqo
    ]);

    })

   

    ->withMiddleware(function (Middleware $middleware) {
    $middleware->alias([
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
    ]);
})

    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
