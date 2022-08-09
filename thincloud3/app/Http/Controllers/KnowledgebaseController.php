<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KnowledgebaseController extends Controller
{
    public function showpageone(){
        return view("pages.knowledgebase");

    }
    public function showpagetwo(){
        return view("pages.knowledgebase-category");

    }
    public function showpagethree(){
        return view("pages.knowledgebase-questions");

    }
}
