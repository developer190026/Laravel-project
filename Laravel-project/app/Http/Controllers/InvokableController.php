<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvokableController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
       return '<h2>hello invokable controller</h2>';
    }
}
