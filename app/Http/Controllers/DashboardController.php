<?php

namespace App\Http\Controllers;

use App\Models\BukuTamu;
use App\Models\HistoriKunjungan;
use App\Models\JadwalKunjungan;
use App\Models\Koleksi;
use App\Models\KunjunganPetugas;
use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\FlareClient\View;

class DashboardController extends Controller
{
    public function index()
    {

        $user = Auth::user(); // Mendapatkan data user yang sedang login
        $historiKunjunganQuery = HistoriKunjungan::with(['kunjunganPetugas.jadwalKunjungan']);

        if ($user->role === 'superadmin' || $user->role === 'admin') {
            // Jika pengguna memiliki peran superadmin atau admin, ambil semua data histori kunjungan
            $historiKunjungan = $historiKunjunganQuery->get();
        } else {
            // Jika bukan superadmin atau admin, ambil data histori kunjungan berdasarkan user_id
            $historiKunjungan = $historiKunjunganQuery->whereHas('kunjunganPetugas.jadwalKunjungan', function ($query) use ($user) {
                $query->where('user_id', $user->id);
            })->get();
        }


        $totalPegawai = Pegawai::count();
        $totalPengguna = User::count();
        $totalJadwal = JadwalKunjungan::count();
        $totalKoleksi = Koleksi::count();
        $totalTamu = BukuTamu::count();
        $bukutamu = BukuTamu::all();
        $adminCount = User::where('role', 'admin')->count();

        return view('dashboard.index', [
            'totalPegawai' => $totalPegawai,
            'totalPengguna' => $totalPengguna,
            'totalJadwal' => $totalJadwal,
            'totalKoleksi' => $totalKoleksi,
            'historiKunjungan' => $historiKunjungan,
            'totalTamu' => $totalTamu, 
            'bukutamu' => $bukutamu,
            'adminCount' => $adminCount, 
        ]);
    }
}
