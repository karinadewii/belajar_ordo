<?php

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

// Route untuk /hello yang mengembalikan "Hello World"
Route::get('/hello', function () {
    return "Hello World";
});

// Route untuk /perkalian/{angka} yang mengembalikan angka * 2
Route::get('/perkalian/{angka}', function ($angka) {
    return $angka * 2;
});