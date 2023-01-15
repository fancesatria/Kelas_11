<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RumusTabung extends Controller
{
    public function index(){
        return view('form-tabung');
    }

    public function hitungTabung(Request $request){
        $r = $request->jarijari;
        $t = $request->tinggi;

        $hasil = 3.14*($r*$r)*$t;
        session()->put('hasil', $hasil);
        return view('form-tabung');
    }
}
