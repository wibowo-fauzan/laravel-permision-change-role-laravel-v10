<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RedirectController;

Route::get('/', [PageController::class, 'home']);
// Route::get('/', [PageController::class, 'home']);/doc-wibi-online

//  jika user belum login
Route::group(['middleware' => 'guest'], function () {
    // index home awal

    // login dan register
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'dologin']);
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'store']);
});


// untuk dashboard/admin/doc-wibi dan pegawai
Route::group(['middleware' => ['auth', 'checkrole:1,2']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/redirect', [RedirectController::class, 'cek']);
});


// untuk dashboard/admin/doc-wibi
Route::group(['middleware' => ['auth', 'checkrole:1']], function () {});

// untuk pegawai
Route::group(['middleware' => ['auth', 'checkrole:2', 'verified']], function () {});
