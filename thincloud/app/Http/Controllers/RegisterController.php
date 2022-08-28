<?php

namespace App\Http\Controllers;

class RegisterController extends Controller
{
    public function showpage()
    {
        return view('auth.register');
    }
}
