<?php

namespace App\Http\Controllers;

use App\Models\BukuTamu;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function showBukuTamu(){

        $tamu = BukuTamu::all();
        return view('dashboard.laporan.buku-tamu', [
            'bukutamu' => $tamu
        ]);
    }
}
