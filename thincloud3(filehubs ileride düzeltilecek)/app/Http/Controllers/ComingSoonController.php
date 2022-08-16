<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComingSoonController extends Controller
{
    public function showpage(){

        return view('pages.coming-soon');
    }
}
