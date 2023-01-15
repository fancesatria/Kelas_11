<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kalkulator extends Controller
{
    public function index()
    {
        return view('kalkulator-endra');
    }

    public function hitung(Request $request)
    {
        $bil1=$request->bil1;
        $bil2=$request->bil2;
        $hasil=$bil1+$bil2;

        return $hasil;
    }
}
