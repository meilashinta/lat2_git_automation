<?php

namespace App\Http\Controllers;

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
}
