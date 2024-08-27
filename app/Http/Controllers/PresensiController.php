<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presensi;
use Carbon\Carbon;

class PresensiController extends Controller
{
    public function riwayatPresensi()
    {
        // Ambil presensi yang dilakukan hari ini
        $presensis = Presensi::whereDate('tanggal', Carbon::today())->get();

        return view('riwayat-presensi', compact('presensis'));
    }
}
