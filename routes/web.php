<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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
    return view('index');
});

Route::get('/tailwind', function () {
    return view('tailwindtest');
});

Route::get('/raskop', function () {
    return view('raskop');
});



    
// Route::get('/reservasi', ReservasiController::class)->name('reservasi');

// Route::get('/', IndexController::class)->name('index');

Route::get('testing', function () {
    $response = Http::get('http://localhost:8000/api/ruangan');

    return $response;
});
