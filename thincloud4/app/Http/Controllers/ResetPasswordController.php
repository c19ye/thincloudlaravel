<?php

namespace App\Http\Controllers;

class ResetPasswordController extends Controller
{
    public function showpage()
    {
        return view('pages.reset-password');
    }
}
