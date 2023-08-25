<?php

namespace App\Http\Controllers;

use App\Models\BukuTamu;
use App\Models\Koleksi;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $koleksi = Koleksi::all();
        return view('frontend.index', ['koleksi' => $koleksi]);
    }

    public function profile()
    {
        return view('frontend.profile');
    }

    public function koleksi()
    {
        return view('frontend.koleksi.index');
    }

    public function showKoleksiDetail($id)
    {
        $koleksi = Koleksi::findOrFail($id);
        return view('frontend.koleksi-detail', compact('koleksi'));
    }

    public function bukutamu(){
        return view('frontend.bukutamu');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'nama' => 'required',
            'asal' => 'required',
            'pekerjaan' => 'required',
            'kesan' => 'required',
            'pesan' => 'required',
        ]);

        $bukutamu = new BukuTamu([
            'tanggal' => $validatedData['tanggal'],
            'nama' => $validatedData['nama'],
            'asal' => $validatedData['asal'],
            'pekerjaan' => $validatedData['pekerjaan'],
            'kesan' => $validatedData['kesan'],
            'pesan' => $validatedData['pesan'],
        ]);

        $bukutamu->save();

        return redirect('/');
    }
}
