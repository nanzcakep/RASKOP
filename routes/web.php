<?php

use Carbon\Carbon;
use App\Models\Room;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\WEB\ReservasiController;

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
    // query room for get id_room,room_name,capacity, and image_url from database
    $rooms = Room::select('id_room','room_name','capacity','description','image_url')->get();
    return view('raskop',compact('rooms'));
});

Route::get('/reservasi', [ReservasiController::class,'index']);



    
// Route::get('/reservasi', ReservasiController::class)->name('reservasi');

// Route::get('/', IndexController::class)->name('index');



