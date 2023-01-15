<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZodiakController extends Controller
{
    public function index(){
        return view('form-zodiak');
    }

    public function find(Request $req){
        $mon = $req->mon;
        $date = $req->date;

        switch ($mon) {
            case 1:
                if ($date >= 1 && $date <= 19) {
                    $hasil = "Capricorn";
                }
                if ($date >= 20 && $date <= 31 ) {
                    $hasil = "Aquarius";
                }
                break;
            case 2:
                if ($date >= 1 && $date <= 19) {
                    $hasil = "Aquarius";
                }
                if ($date >= 20 && $date <= 31 ) {
                    $hasil = "Pisces";
                }
                break;
            case 3:
                if ($date >= 1 && $date <= 20) {
                    $hasil = "Pisces";
                }
                if ($date >= 21 && $date <= 31 ) {
                    $hasil = "Aries";
                }
                break;
            case 4:
                if ($date >= 1 && $date <= 19) {
                    $hasil = "Aries";
                }
                if ($date >= 20 && $date <= 30 ) {
                    $hasil = "Taurus";
                }
                break;
            case 5:
                if ($date >= 1 && $date <= 20) {
                    $hasil = "Taurus";
                }
                if ($date >= 21 && $date <= 31 ) {
                    $hasil = "Gemini";
                }
                break;
            case 6:
                if ($date >= 1 && $date <= 20) {
                    $hasil = "Gemini";
                }
                if ($date >= 21 && $date <= 30 ) {
                    $hasil = "Cancer";
                }
                break;
            case 7:
                if ($date >= 1 && $date <= 22) {
                    $hasil = "Cancer";
                }
                if ($date >= 23 && $date <= 31 ) {
                    $hasil = "Leo";
                }
                break;
            case 8:
                if ($date >= 1 && $date <= 22) {
                    $hasil = "Leo";
                }
                if ($date >= 23 && $date <= 31 ) {
                    $hasil = "Virgo";
                }
                break;
            case 9:
                if ($date >= 1 && $date <= 22) {
                    $hasil = "Virgo";
                }
                if ($date >= 23 && $date <= 30 ) {
                    $hasil = "Libra";
                }
                break;
            case 10:
                if ($date >= 1 && $date <= 22) {
                    $hasil = "Libra";
                }
                if ($date >= 23 && $date <= 31 ) {
                    $hasil = "Scorpius";
                }
                break;
            case 11:
                if ($date >= 1 && $date <= 21) {
                    $hasil = "Scorpius";
                }
                if ($date >= 22 && $date <= 30 ) {
                    $hasil = "Sagitarius";
                }
                break;
            case 12:
                if ($date >= 1 && $date <= 21) {
                    $hasil = "Sagitarius";
                }
                if ($date >= 22 && $date <= 31 ) {
                    $hasil = "Capricorn";
                }
                break;
            
            default:
                $hasil = "Data salah";
                break;

            
        }
        session()->put('hasil', $hasil);
        return view('form-zodiak');
    }
}
