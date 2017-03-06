<?php

namespace Brayniverse\RouteMacros\Tests;

use Illuminate\Support\Facades\Route;

class ViewControllerTest extends TestCase
{
    public function test_view_rendered()
    {
        Route::view('/contact', 'contact');

        $response = $this->get('/contact');

        // In order to support versions of Laravel below v5.4
        // you need to check if the `assertSee` method exists
        // as `see` was renamed to `assertSee` in the update.
        if (method_exists($response, 'assertSee')) {
            $response->assertSee('Contact us');
        } else {
            $response->see('Contact us');
        }
    }
}
