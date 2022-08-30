<?php

namespace App\Http\Controllers;

class PageMiscNotAuthorizedController extends Controller
{
    public function showpage()
    {
        return view('pages.page-misc-not-authorized');
    }
}
