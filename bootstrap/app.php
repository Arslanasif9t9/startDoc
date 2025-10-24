<?php

use App\Http\Middleware\CheckPassword;
use App\Http\Middleware\EnsureTokenValid;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
        $middleware->append(EnsureTokenValid::class);
        $middleware->appendToGroup('pass&ip', [
            EnsureTokenValid::class,
            CheckPassword::class,
        ]);
        $middleware->alias([
            'CP'=>CheckPassword::class
        ]);
        $middleware->priority([
            EnsureTokenValid::class,
            CheckPassword::class,
        ]);

        $middleware->validateCsrfTokens(except: [
            'submit'
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
