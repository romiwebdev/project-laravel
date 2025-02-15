<?php

use Illuminate\Support\Facades\Route;

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