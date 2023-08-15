<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    public function index(){

        $users = User::all();
        return view('dashboard.manajemen-pengguna.pengguna.index',
            [
                'user' => $users
            ]
        );
    }

    public function create()
    {
        return view('dashboard.manajemen-pengguna.pengguna.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email', // Menambahkan "email" setelah "users" untuk menentukan kolom yang harus dicek unik
            'password' => 'required|min:6',
            // Tambahkan validasi untuk atribut lainnya sesuai kebutuhan
        ], [
            'email.unique' => 'Email sudah digunakan. Silakan gunakan email lain.',
            'password.min' => 'Password harus memiliki setidaknya 6 karakter.',
            // Tambahkan pesan error lain sesuai kebutuhan
        ]);

        // Simpan data pengguna ke dalam basis data
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            // Simpan atribut lainnya sesuai kebutuhan
        ]);

        return redirect('/dashboard-pengguna')->with('success', 'Pengguna berhasil ditambahkan!');
    }



    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('dashboard.manajemen-pengguna.pengguna.edit', [
            'user' => $users
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:6', // Hanya jika ingin mengubah kata sandi
            // Tambahkan aturan validasi untuk atribut lainnya jika diperlukan
        ], [
            'email.unique' => 'Email sudah digunakan. Silakan gunakan email lain.',
            'password.min' => 'Password harus memiliki setidaknya 6 karakter.',
            // Tambahkan pesan error lain sesuai kebutuhan
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        // Perbarui atribut lainnya jika diperlukan

        $user->save();

        return redirect('/dashboard-pengguna')->with('success', 'Pengguna berhasil diperbarui!');
    }


    public function destroy($id)
    {
        $users = User::findOrFail($id);

        $users->delete();

        return redirect('/dashboard-pengguna')->with('delete', 'Pengguna berhasil dihapus.');
    }
}
