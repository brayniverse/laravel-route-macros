<?php

namespace Brayniverse\RouteMacros;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        require_once __DIR__.'/macros.php';
    }
}
