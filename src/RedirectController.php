<?php

namespace Brayniverse\RouteMacros;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RedirectController extends Controller
{
    /**
     * Handle the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request)
    {
        return redirect($request->route('destination'), $request->route('status'));
    }
}
