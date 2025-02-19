<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CastController;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/master', function () {
    return view('layouts.master');
});
Route::get('/table', function () {
    return view('pages.table');
});
Route::get('/data-table', function () {
    return view('pages.data-table');
});

Route::get('/', [CastController::class, 'index'])->name('dashboard');
Route::resource('cast', CastController::class);

