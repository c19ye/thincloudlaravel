<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function showpage(){

        return view('pages.forgot-password');
    }
}
