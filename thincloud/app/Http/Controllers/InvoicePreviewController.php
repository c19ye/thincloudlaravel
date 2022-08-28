<?php

namespace App\Http\Controllers;

class InvoicePreviewController extends Controller
{
    public function showpage()
    {
        return view('pages.invoice-preview');
    }
}
