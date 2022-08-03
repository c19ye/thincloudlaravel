<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DomainController extends Controller
{
    public function showpage(){
        return view('pages.domain');
    }
}
