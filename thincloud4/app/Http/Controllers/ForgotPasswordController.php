<?php

namespace App\Http\Controllers;

class ForgotPasswordController extends Controller
{
    public function showpage()
    {
        return view('pages.forgot-password');
    }
}
