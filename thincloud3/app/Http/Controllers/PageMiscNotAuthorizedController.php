<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageMiscNotAuthorizedController extends Controller
{
    public function showpage(){

        return view('pages.page-misc-not-authorized');
    }
}
