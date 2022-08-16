<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifyMailController extends Controller
{
    public function showpage(){

        return view('pages.verify-mail');
    }
}
