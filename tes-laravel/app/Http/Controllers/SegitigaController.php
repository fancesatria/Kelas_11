<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SegitigaController extends Controller
{
    public function index(){
        return view('form-segitiga');
    }

    public function hitungSegitiga(Request $request){
        $a = $request->alas;
        $t = $request->tinggi;

        $hasil = ($a*$t)/2;
        session()->put('hasil', $hasil);
        return view('form-segitiga');
    }
}
