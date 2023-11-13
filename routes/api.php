<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ReservasiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Room Routes
Route::get('/ruangan', [RoomController::class,'getRoom']);
Route::get('/ruangan/{slug}', [RoomController::class,'getDetailRoom']);
Route::post('/ruangan', [RoomController::class,'addRoom']);
Route::put('/ruangan/{slug}', [RoomController::class,'updateRoom']);
Route::delete('/ruangan/{slug}', [RoomController::class,'deleteRoom']);


//Customer Routes
Route::get('/pelanggan',[CustomerController::class,'getCustomer']);
Route::post('/pelanggan',[CustomerController::class,'addCustomer']);


//Reservasi Routes
Route::get('/reservasi',[ReservasiController::class,'getReservasi']);
Route::post('/reservasi',[ReservasiController::class,'addReservasi']);

Route::get('testing', function () {
    $response = Http::get('http://127.0.0.1:8000/api/ruangan');
    dd($response);
});