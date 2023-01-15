<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function index(){
        return view('form-kalkulator');
    }

    public function hitungKalku(Request $request){
        $bil1 = $request->bil1;
        $bil2 = $request->bil2;
        $tambah = $request->tambah;
        $kurang = $request->kurang;
        $kali = $request->kali;
        $bagi = $request->bagi;

        if ($tambah) {
            $hasil = $bil1+$bil2;
        } elseif ($kurang) {
            $hasil = $bil1-$bil2;
        } elseif ($kali) {
            $hasil = $bil1*$bil2;
        } elseif ($bagi) {
            $hasil = $bil1/$bil2;
        }

        //simpan pakai session
        session()->put('hasil',$hasil);
        return view('form-kalkulator');
        
    }

    //failed
    // public function reset(Request $request){
    //     session()->forget('hasil');
    // }
}
