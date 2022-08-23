<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function showpage()
    {
        if (auth()->check()) {
            return view('pages.index');
        } else {
            return view('auth.login');
        }
    }
}
