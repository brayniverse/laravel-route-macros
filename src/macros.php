<?php

use Illuminate\Support\Facades\Route;

if (! Route::hasMacro('view')) {
    Route::macro('view', function ($url, $view) {
        return Route::get($url, '\Brayniverse\RouteMacros\ViewController@handle')
            ->defaults('view', $view);
    });
}

if (! Route::hasMacro('redirect')) {
    Route::macro('redirect', function ($url, $destination, $status = 301) {
        return Route::any($url, '\Brayniverse\RouteMacros\RedirectController@handle')
            ->defaults('destination', $destination)
            ->defaults('status', $status);
    });
}
