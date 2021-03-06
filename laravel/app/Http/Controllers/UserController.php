<?php

namespace laravel\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('second');
    }
    public function showPath(Request $request) {
        $uri = $request->path();
        echo '<br>URI: ' . $uri;

        $url = $request->url();
        echo '<br>URL: ' . $url;

        $method = $request->method();
        echo '<br>Method: ' . $method;
    }
}
