<?php

use App\Http\Middleware\Admin;
use App\Http\Middleware\Tecnico;
use App\Http\Middleware\User;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Auth;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
      $middleware->alias([
        'admin' =>\App\Http\Middleware\Admin::class,
        'tecnico' =>\App\Http\Middleware\Tecnico::class,
        'user' =>\App\Http\Middleware\User::class,
      ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
