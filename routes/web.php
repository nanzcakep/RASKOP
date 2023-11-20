<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Models\Room;

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
    $rooms = Room::select('id_room','room_name','capacity','image_url')->get();
    return view('raskop',compact('rooms'));
});



    
// Route::get('/reservasi', ReservasiController::class)->name('reservasi');

// Route::get('/', IndexController::class)->name('index');

Route::get('testing', function () {
    $reservedTimes = [
        ["start_time" => "06:00", "end_time" => "09:00"],
        ["start_time" => "09:00", "end_time" => "12:00"],
        ["start_time" => "14:00", "end_time" => "17:00"],
    ];

    // Menginisialisasi daftar waktu yang tersedia dari 06:00 hingga 18:00
    $availableTimes = [['start_time' => '06:00', 'end_time' => '18:00']];

    // Iterasi melalui waktu yang telah dipesan dan kurangkan dari waktu yang tersedia
    foreach ($reservedTimes as $reservedTime) {
        $start = strtotime($reservedTime['start_time']);
        $end = strtotime($reservedTime['end_time']);

        foreach ($availableTimes as $key => $availableTime) {
            $availStart = strtotime($availableTime['start_time']);
            $availEnd = strtotime($availableTime['end_time']);

            // Jika waktu yang dipesan berada di dalam waktu yang tersedia
            if ($start < $availEnd && $end > $availStart) {
                // Ubah waktu yang tersedia sesuai dengan waktu yang dipesan
                if ($start <= $availStart && $end >= $availEnd) {
                    unset($availableTimes[$key]);
                } else {
                    if ($start <= $availStart) {
                        $availableTimes[$key]['start_time'] = date('H:i', $end);
                    } elseif ($end >= $availEnd) {
                        $availableTimes[$key]['end_time'] = date('H:i', $start);
                    } else {
                        // Pisahkan waktu yang dipesan menjadi dua bagian
                        $newTimeSlot = [
                            'start_time' => date('H:i', $end),
                            'end_time' => date('H:i', $availEnd),
                        ];
                        array_push($availableTimes, $newTimeSlot);
                        $availableTimes[$key]['end_time'] = date('H:i', $start);
                    }
                }
            }
        }
    }

    // Ambil waktu yang tersedia dalam format yang diinginkan
    $result = [];
    foreach ($availableTimes as $timeSlot) {
        $startTime = strtotime($timeSlot['start_time']);
        $endTime = strtotime($timeSlot['end_time']);
        $currentTime = $startTime;

        while ($currentTime < $endTime) {
            $result[] = date('H:i', $currentTime);
            $currentTime = strtotime('+15 minutes', $currentTime);
        }
    }

    return response()->json(['available_times' => $result]);

    
});

