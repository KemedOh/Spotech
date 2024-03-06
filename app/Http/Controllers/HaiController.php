<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaiController extends Controller
{
    public function index(Request $request)
    {
        $result = "HAi world ".$request->nama;
        return $result;
    }
    public function Shap(Request $request,$hp)
    {
        $result = "Hai  ".$request->nama." dengan nomor telepon ".$hp;
        return $result;
    }
}
