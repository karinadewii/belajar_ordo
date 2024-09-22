<?php

use Illuminate\Http\Request;
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

// Route untuk /hello yang menggunakan method 'hello' dari ExampleController
Route::get('/hello', [ExampleController::class, 'hello']);

// Route untuk /perkalian/{angka} yang menggunakan method 'perkalian' dari ExampleController
Route::get('/perkalian/{angka}', [ExampleController::class, 'perkalian']);

Route::get('/tambah', function (Request $request) {
    // Ambil nilai dari query parameter angka1 dan angka2
    $angka1 = $request->query('angka1');
    $angka2 = $request->query('angka2');

    // Lakukan penjumlahan
    $hasil = null;
    if ($angka1 !== null && $angka2 !== null) {
        $hasil = $angka1 + $angka2;
    }

    // Kembalikan view dengan data
    return view('tambah', compact('angka1', 'angka2', 'hasil'));
});

