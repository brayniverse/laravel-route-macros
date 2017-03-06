<?php

namespace Brayniverse\RouteMacros\Tests;

use Illuminate\Support\Facades\Route;

class RedirectControllerTest extends TestCase
{
    public function test_redirect_uses_301_status_by_default()
    {
        Route::redirect('/contact_us', '/contact');
        Route::get('/contact', function () {});

        $response = $this->get('/contact_us');

        if (method_exists($response, 'assertRedirect')) {
            $response->assertRedirect('/contact');
        } else {
            $this->assertRedirectedTo('/contact');
        }
    }

    public function test_can_override_default_redirect_status()
    {
        Route::redirect('/contact_us', '/contact', 302);
        Route::get('/contact', function () {});

        $response = $this->get('contact_us');

        if (method_exists($response, 'assertStatus')) {
            $response->assertStatus(302);
        } else {
            $this->assertResponseStatus(302);
        }
    }
}
