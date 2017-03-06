<?php

namespace Brayniverse\RouteMacros;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class ViewController extends Controller
{
    public function handle(Request $request)
    {
        return View::make($request->route('view'));
    }
}
