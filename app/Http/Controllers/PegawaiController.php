<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PegawaiController extends Controller
{
    public function index()
    {
        $name = "Raymond";
        $birthDate = Carbon::create(2006, 7, 2);
        $my_age = $birthDate->age;

        $hobbies = ["Main", "Coding", "Gaming", "Belajar"];

        $tgl_harus_wisuda = Carbon::create(2028, 7, 30);
        $today = Carbon::now();
        $time_to_study_left = $today->diffInDays($tgl_harus_wisuda, false);

        $current_semester = 3;
        $future_goal = "Bahagia";


        if ($current_semester < 3) {
            $motivasi = "Masih Awal, Kejar TAK";
        } else {
            $motivasi = "Jangan main-main, kurangi main game!";
        }

        // Kirim data ke view
       return view('Pegawai-home', compact(
    'name',
    'my_age',
    'hobbies',
    'tgl_harus_wisuda',
    'time_to_study_left',
    'current_semester',
    'motivasi',
    'future_goal'
));
    }
}
