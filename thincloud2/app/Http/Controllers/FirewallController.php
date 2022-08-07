<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirewallController extends Controller
{
    public function showpage(){
        return view('pages.firewall');
    }
}
