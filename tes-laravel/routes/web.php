<?php

use App\Http\Controllers\Kalkulator;
use App\Http\Controllers\RumusTabung;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZodiakController;
use App\Http\Controllers\SegitigaController;
use App\Http\Controllers\KalkulatorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('kalkulator', [KalkulatorController::class, 'index'])->name('kalkulator');
Route::post('kalkulator', [KalkulatorController::class, 'hitungKalku'])->name('hitung');
// Route::get('kalkulator', [KalkulatorController::class, 'reset'])->name('reset');

Route::get('tabung', [RumusTabung::class, 'index'])->name('tabung');
Route::post('tabung', [RumusTabung::class, 'hitungTabung'])->name('tabung');

Route::get('zodiak', [ZodiakController::class, 'index'])->name('zodiak');
Route::post('zodiak', [ZodiakController::class, 'find'])->name('find');

Route::get('segitiga', [SegitigaController::class, 'index'])->name('segitiga');
Route::post('segitiga', [SegitigaController::class, 'hitungSegitiga'])->name('segitiga'); 

Route::get('kalkulator-endra',[Kalkulator::class, 'index']);
Route::post('kalkulator-endra',[kalkulator::class, 'hitung']);
