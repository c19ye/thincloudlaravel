<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageMiscUnderMaintenanceController extends Controller
{
    public function showpage(){

        return view('pages.page-misc-under-maintenance');
    }
}
