<?php

use App\Http\Controllers\DefaultController;
use App\Http\Controllers\MusteriController;
use App\Http\Controllers\RaporController;
use App\Http\Controllers\SiparisController;
use App\Http\Controllers\UrunController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('nedmin')->group(function (){

    Route::get('',[DefaultController::class,'index'])->name('nedmin.Index');
    Route::get('urunler',[UrunController::class,'index'])->name('urun.Index');
    Route::get('siparisler',[SiparisController::class,'index'])->name('siparis.Index');
    Route::get('raporlama',[RaporController::class,'index'])->name('raporla.Index');
    Route::get('musteriler',[MusteriController::class,'index'])->name('musteri.Index');

    Route::post('/urun-rapor-olustur', [RaporController::class,'export'])->name('urun-rapor-olustur');

});





