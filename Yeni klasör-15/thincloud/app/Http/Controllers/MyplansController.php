<?php

namespace App\Http\Controllers;

use App\Models\Myplan;
use App\Models\VirtualMachines;
use Illuminate\Http\Request;

class MyplansController extends Controller
{
    public function show(Request $request)
    {
        //id si 1 olannın verilerini alır
        //indexleçağırılan yerde verme işi aklında bulunsun

        $data = Myplan::get();
        $virtualmachinemodel = VirtualMachines::where('user_id', '=', auth()->user()->id)->get();

        //$prices->name yazılırsa istediğin sutünddaki veriyi alırsın

        $temel = Myplan::select('features1', 'features2', 'features3', 'features4', 'features5', 'features6', 'features7', 'features8')->where('id', 1)->get();
        $standart = Myplan::select('features1', 'features2', 'features3', 'features4', 'features5', 'features6', 'features7', 'features8')->where('id', 2)->get();
        $isletme = Myplan::select('features1', 'features2', 'features3', 'features4', 'features5', 'features6', 'features7', 'features8')->where('id', 3)->get();
        $kurumsal = Myplan::select('features1', 'features2', 'features3', 'features4', 'features5', 'features6', 'features7', 'features8')->where('id', 4)->get();

        $plannumber = $request;

        return view('pages.myplans', compact('data', 'temel', 'standart', 'isletme', 'kurumsal', 'virtualmachinemodel', 'plannumber'));
    }
}
