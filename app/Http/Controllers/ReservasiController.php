<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\Customer;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use App\Http\Resources\ReservasiResource;

class ReservasiController extends Controller
{
    public function getReservasi(){
        $getAllReservasi = Reservasi::with(['room','customer'])->get();

        return ReservasiResource::collection($getAllReservasi);
    }

    public function addReservasi(Request $request){
        //pelanggan
        $nama = $request->nama;
        $nomer  = $request->nomer;
        $fakultas = $request->fakultas;
        $pesanan = $request->pesanan;
        $note = $request->note;
      


        //reservasi
        $inputTanggal = $request->tanggal;
        $ruangan = $request->ruangan;
        $jamMulai = $request->mulai;
        
        // Calculate end time by adding 3 hours to the start time
        $jamSelesai = strtotime($jamMulai) + (3 * 3600);
        
        // Convert input date to database format
        $date = Carbon::createFromFormat('d-m-Y', $inputTanggal);
        $dateForDatabase = $date->toDateString();
        
        // Format the start and end times without seconds
        $formattedTimeMulai = date("H:i:00", strtotime($jamMulai));
        $formattedTimeSelesai = date("H:i:00", $jamSelesai);
        
        // Check if the specified date and time are in the past
        $timezone = 'Asia/Jakarta'; // You should replace this with your actual time zone
        Carbon::setLocale('id'); // Set the locale to Indonesian if needed
        
        $currentDateTime = Carbon::now($timezone);
        $requestedDateTime = $date->setTimezone($timezone)->setTimeFromTimeString($formattedTimeMulai);
        
        if ($requestedDateTime < $currentDateTime) {
            // The requested date and time are in the past, handle accordingly
            return response()->json(['error' => 'Tidak dapat melakukan reservasi, jam atau tanggal sudah lewat']);
        }
        // Check if the room is already reserved for the given date and time
        if (Reservasi::where('id_room', $ruangan)
            ->where('tanggal', $dateForDatabase)
            ->where(function ($query) use ($formattedTimeMulai, $formattedTimeSelesai) {
                $query->where(function ($query) use ($formattedTimeMulai, $formattedTimeSelesai) {
                    $query->where('jam_mulai', '>=', $formattedTimeMulai)
                        ->where('jam_mulai', '<', $formattedTimeSelesai);
                })->orWhere(function ($query) use ($formattedTimeMulai, $formattedTimeSelesai) {
                    $query->where('jam_selesai', '>', $formattedTimeMulai)
                        ->where('jam_selesai', '<=', $formattedTimeSelesai);
                });
            })
            ->exists()) {
            // Room is already reserved for the given date and time, handle accordingly
            return response()->json(['error' => 'Room is already reserved for the given date and time.']);
        }

        //RandomAngka
        $characters = '0123456789';
        $randomString = '';

        $length = 4; // Ganti dengan panjang string yang diinginkan

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        //Customers insert
        $customer = Customer::create([
            'name' => $request->nama,
            'phone' => $request->nomer,
            'faculty' => $request->fakultas,
            'order' => $request->pesanan,
            'note' => $request->note
        ]);
        
        // Proceed with creating the reservation
        $reservasi = Reservasi::create([
            'kode_reservasi' => 'RAS'.$randomString,
            'id_room' => $ruangan,
            'id_customer' => $customer->id,
            'tanggal' => $dateForDatabase,
            'jam_mulai' => $formattedTimeMulai,
            'jam_selesai' => $formattedTimeSelesai
        ]);
        
        // Return a success response or perform any additional actions
        return response()->json(['success' => 'Reservation created successfully. Code '.$reservasi->kode_reservasi]);
        
    }

    public function getAvailableReservations(Request $request){
        $date = $request->input('date');
        $room_id = $request->input('room_id');

        // Mengambil data reservasi dari database berdasarkan tanggal dan ruangan
        $reservedTimes = Reservasi::where('id_room', $room_id)
            ->where('tanggal', $date)
            ->get(['jam_mulai', 'jam_selesai'])
            ->toArray();

        // Menginisialisasi daftar waktu yang tersedia dari 06:00 hingga 18:00
        $availableTimes = [['start_time' => '06:00', 'end_time' => '18:00']];

        // Iterasi melalui waktu yang telah dipesan dan kurangkan dari waktu yang tersedia
        foreach ($reservedTimes as $reservedTime) {
            $start = strtotime($reservedTime['jam_mulai']);
            $end = strtotime($reservedTime['jam_selesai']);

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
                $currentTime = strtotime('+1 minutes', $currentTime);
            }
        }

        return response()->json(['available_times' => $result]);

    }
}
