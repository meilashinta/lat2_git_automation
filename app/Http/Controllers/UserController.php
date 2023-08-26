<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    public function index()
    {
        $loggedInUser = auth()->user(); // Mendapatkan informasi pengguna yang sedang masuk

        if ($loggedInUser->role === 'admin') {
            $users = User::whereIn('role', ['sekolah', 'dinas_pendidikan'])->get();
        } elseif ($loggedInUser->role === 'superadmin'){
            $users = User::all();
             // Kosongkan jika peran pengguna bukan admin
        }else{
            $users = collect();
        }

        return view(
            'dashboard.manajemen-pengguna.pengguna.index',
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
            'username' => 'required|unique:users,username',
            'email' => 'nullable|email|unique:users,email',
            'role' => 'required',
            'password' => 'required|min:6',
            // Tambahkan validasi untuk atribut lainnya sesuai kebutuhan
        ], [
            'username.unique' => 'Username sudah digunakan. Silakan gunakan username lain.',
            'email.unique' => 'Email sudah digunakan. Silakan gunakan email lain.',
            'password.min' => 'Password harus memiliki setidaknya 6 karakter.',
            // Tambahkan pesan error lain sesuai kebutuhan
        ]);

        // Simpan data pengguna ke dalam basis data
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'role' => $request->role,
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
            'username' => 'required|username|unique:users,username,' . $id,
            'email' => 'nullable|email|unique:users,email,' . $id,
            'password' => 'nullable|min:6',
        ], [
            'username.unique' => 'Username sudah digunakan. Silakan gunakan username lain.',
            'email.unique' => 'Email sudah digunakan. Silakan gunakan email lain.',
            'password.min' => 'Password harus memiliki setidaknya 6 karakter.',
        ]);

        $user->name = $request->name;
        $user->username = $request->username;
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
