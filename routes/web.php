<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgendaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;

Auth::routes();


// Define a group of routes with 'auth' middleware applied
Route::middleware(['auth'])->group(function () {
    // Define a GET route for the root URL ('/')
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/lihat_pengirim', [AdminController::class,'lihat_pengirim']);
    Route::get('/hapus_pengirim/{id}', [AdminController::class,'hapus_pengirim'])->name('hapus_pengirim');
    Route::put('/update_status/{id}', [AdminController::class,'update_status']);
    
    Route::get('/lihat_pegawai', [AdminController::class,'lihat_pegawai']);
    
    Route::get('/dashboard/user', [PegawaiController::class,'index'])->name('pegawai.index');
    Route::get('/input_pegawai', [PegawaiController::class,'create']);
    Route::post('/store_pegawai', [PegawaiController::class,'store']);
    Route::get('/hapus_pegawai/{id}', [PegawaiController::class,'destroy']);
    Route::get('/penjadwalan', [PegawaiController::class,'penjadwalan']);

    // proses pengiriman data
    Route::post('/penjadwalan/store', [AgendaController::class,'store']);
    Route::put('/penjadwalan/update', [AgendaController::class,'update']);
    Route::delete('/penjadwalan/delete/{id}', [AgendaController::class, 'destroy'])->name('penjadwalan.destroy');

    Route::get('events', [AgendaController::class,'getEvents']);
    

    

    // Define a GET route with dynamic placeholders for route parameters
    Route::get('{routeName}/{name?}', [HomeController::class, 'pageView']);
});
