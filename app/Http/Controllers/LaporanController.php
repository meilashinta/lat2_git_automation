<?php

namespace App\Http\Controllers;

use App\Models\BukuTamu;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function showBukuTamu(Request $request){

        $query = Bukutamu::query();

        if ($request->has('bulan')) {
            $query->whereMonth('tanggal', $request->bulan);
        }

        if ($request->has('tahun')) {
            $query->whereYear('tanggal', $request->tahun);
        }

        $bukutamu = $query->get();

        $tamu = BukuTamu::all();
        return view('dashboard.laporan.buku-tamu', [
            'bukutamu' => $tamu,
            'bukutamu' => $bukutamu
        ]);
    }
}
