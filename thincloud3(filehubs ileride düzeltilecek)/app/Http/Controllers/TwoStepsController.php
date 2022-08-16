<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwoStepsController extends Controller
{
    public function showpage(){

        return view('pages.two-steps');
    }
}
