<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageMiscErrorController extends Controller
{
    public function showpage(){

        return view('pages.page-misc-error');
    }
}
