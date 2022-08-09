<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function showpage(){
        return view('pages.settings');
    }
}
