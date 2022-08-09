<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilehubsController extends Controller
{
    public function showpage(){
        return view('pages.filehubs');
    }
}
