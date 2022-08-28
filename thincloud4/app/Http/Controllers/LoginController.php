<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function showpage()
    {
        return view('auth.login');
    }
}
