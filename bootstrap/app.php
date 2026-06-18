<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {

        //Making individual middlewares can be used one at a time
        $middleware->append(AgeCheck::class);
        $middleware->append(CountryCheck::class);
        //Grouped named middleware named MiddlewareMultiGroup
        $middleware->appendToGroup('MiddlewareMultiGroup', [AgeCheck::class, CountryCheck::class]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
