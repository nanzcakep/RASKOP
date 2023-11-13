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
        $inputTanggal = $request->tanggal;
        $ruangan = $request->ruangan;
        $jamMulai = $request->mulai;
        $jamSelesai = $request->selesai;
        
        // Konversi tanggal input ke format yang sesuai untuk database
        $date = Carbon::createFromFormat('d-m-Y', $inputTanggal);
        $dateForDatabase = $date->toDateString();
        
        // Mencari semua reservasi yang cocok dengan tanggal dan ruangan yang dipilih
        $cekDateDatabase = Reservasi::where('tanggal', $dateForDatabase)
            ->where('id_room', $ruangan)
            ->get();
        
        $jamKonflik = false;
        
        // Memeriksa apakah jam yang dipilih berkonflik dengan jam yang sudah ada
        foreach ($cekDateDatabase as $reservasi) {
            if ($jamMulai >= $reservasi->jam_selesai || $jamSelesai <= $reservasi->jam_mulai) {
                // Jika tidak ada tabrakan dengan reservasi yang ada
                $jamKonflik = false;
            } else {
                // Jika ada tabrakan dengan reservasi yang ada
                $jamKonflik = true;
                break; // Keluar dari loop, tidak perlu memeriksa lebih lanjut
            }
        }
        
        if ($jamKonflik) {
            // Jika ada tabrakan dengan jam yang sudah ada, pengguna tidak dapat melakukan reservasi
            return response()->json([
                'message' => 'Reservasi sudah ada silahkan pilih jam yang kosong'
            ]);
        } else {
            // Jika tidak ada tabrakan, pengguna dapat melakukan reservasi
            $customer = Customer::create([
                'name' => $request->nama,
                'phone' => $request->nomer,
                'faculty' => $request->fakultas,
                'order' => $request->pesanan,
                'note' => $request->note
            ]);

           $reservasi = Reservasi::create([
                'kode_reservasi' => 'Raskop111111',
                'id_room' => $request->ruangan,
                'id_customer' => $customer->id,
                'tanggal' => $dateForDatabase,
                'jam_mulai' => $jamMulai,
                'jam_selesai' => $jamSelesai
            ]);


            return response()->json([
                'message' => "Berhasil melakukan reservasi tolong simpan Kode reservasi $reservasi->kode_reservasi" 
            ]);
    }
        



        // $currenTime = Carbon::now();
    
        // return $currenTime->format('H:i');
        //     $jamMulai = $request->mulai;
        //     $jamSelesai = $request->selesai;
        //     $currentTime = Carbon::now();

        //     // Pecah waktu mulai dan waktu selesai menjadi jam dan menit
        //     list($jamMulai, $menitMulai) = explode(":", $jamMulai);
        //     list($jamSelesai, $menitSelesai) = explode(":", $jamSelesai);

        //     // Hitung selisih waktu dalam jam dan menit
        //     $selisihJam = $jamSelesai - $jamMulai;
        //     $selisihMenit = $menitSelesai - $menitMulai;

        
        //     // $userInputTimeEnd = Carbon::parse($jamSelesai);

        //     // Aturan 1: Tidak Bisa Reservasi Jika Waktu Sudah Berlalu
        //     if ($jamMulai < $currentTime->format('H:i')) {
        //         return response()->json([
        //             'message' => 'Waktu sudah berlalu'
        //         ]);
        //     }elseif ($selisihJam > 3 || ($selisihJam == 3 && $selisihMenit > 0)) {
        //         return response()->json([
        //             'message' => 'Lebih dari 3 jam'
        //         ]);
        //     }elseif(Reservasi::where('jam_mulai', '<=', $jamMulai)
        //          ->where('jam_selesai', '>', $jamSelesai)
        //          ->exists()){
        //         return response()->json([
        //             'message' => 'Sudah ada reservasi di jam segini'
        //         ]);
        //     };


      







        // // Aturan 2: Tidak Bisa Reservasi Jika Rentang Lebih dari 3 Jam
        // if ($userInputTime->diffInHours($userInputTimeEnd) > 3) {
        //     return "Rentang waktu lebih dari 3 jam, tidak bisa reservasi.";
        // }

        // // Aturan 3: Tidak Bisa Reservasi Jika Rentang Ada di Antara Jam Mulai dan Jam Selesai
        // if (Reservasi::where('jam_mulai', '<=', $userInputTimeEnd)
        //     ->where('jam_selesai', '>', $userInputTime)
        //     ->exists()) {
        //     return "Waktu tumpang tindih dengan reservasi yang sudah ada, tidak bisa reservasi.";
        // }

        // Jika semua aturan terpenuhi, pengguna dapat melakukan reservasi
       
        
        

       
        // dd($request->all());
    }


}
