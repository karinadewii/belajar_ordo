<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

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