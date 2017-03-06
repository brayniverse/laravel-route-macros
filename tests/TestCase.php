<?php

namespace Brayniverse\RouteMacros\Tests;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        $app['config']->set('view.paths', [__DIR__.'/stubs/views']);

        return [\Brayniverse\RouteMacros\ServiceProvider::class];
    }
}
