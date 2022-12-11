<?php

use App\Http\Controllers\PemilikController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

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
    return view('welcome');
});

Route::prefix('pemilik')->group(function(){
    Route::get('/', [PemilikController::class, 'index'])->name('pemiliks.index');
    Route::get('/create', [PemilikController::class, 'create'])->name('pemiliks.create');
    Route::get('/createpegawai', [PemilikController::class, 'createpegawai'])->name('pemiliks.createpegawai');
    Route::post('/store', [PemilikController::class, 'store'])->name('pemiliks.store');
    Route::post('/storepegawai', [PemilikController::class, 'storepegawai'])->name('pemiliks.storepegawai');
});

Route::prefix('pegawai')->group(function(){
    Route::get('/{pemilik}', [PegawaiController::class, 'index'])->name('pegawais.index');
    Route::get('/edit/{id}', [PegawaiController::class, 'edit'])->name('pegawais.edit');
    Route::put('/update/{id}', [PegawaiController::class, 'updatepegawai'])->name('pegawais.updatepegawai');
    Route::delete('/delete{id}', [PegawaiController::class, 'destroy'])->name('pegawais.destroy');
});
