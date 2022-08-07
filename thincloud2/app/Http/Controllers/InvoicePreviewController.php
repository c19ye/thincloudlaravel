<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoicePreviewController extends Controller
{
    public function showpage(){

        return view('pages.invoice-preview');
    }
}
