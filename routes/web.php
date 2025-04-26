<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\HtmlController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helloworld', [HelloWorldController::class, 'index']);
Route::get('/ambilfile', [HelloWorldController::class, 'ambilFile']);
Route::get('/getlorem', [HtmlController::class, 'getLorem']);
use App\Http\Controllers\LatihanController;

Route::get('/gettabel', [LatihanController::class, 'getTabel']);
Route::get('/getform', [LatihanController::class, 'getForm']);

Route::resource('anggota', AnggotaController::class);