<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Generator\Method;

class HttpRequest extends Controller
{
    //
    function init () {
        return view('http');
    }

    function path (Request $request) {
        // return $request->path();
        // return $request->is('http/path');
        // return $request->url();
        // return $request->fullUrl();
        // return $request->fullUrlWithQuery(['type']);
        // return $request->fullUrlWithoutQuery(['type']);
        // return $request->host();
        // return $request->httpHost();
        // return $request->schemeAndHttpHost();
        // return $request->method();
        // return $request->isMethod('Get');
        // return $request->header('X-Header-Name');
        // return $request->header('X-Header-Name', "default");
        // return $request->hasHeader('X-Header-Name');
        return $request->bearerToken();
    }
}
