<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
// App\Http\Controllers\AuthController.php

    public function index()
    {
        return view('login-form');
    }

    public function login(Request $request)
    {
        $request->validate([
            // 'name'     => 'required|max:10',
            // 'email'    => ['required', 'email'],
            'password' => [
                'min:3', // Minimal 8 karakter
                         // 'regex:/[A-Z]/',      // Harus mengandung setidaknya 1 huruf besar
            ],
        ]);

        $pageData['username'] = $request->username;
        $pageData['password'] = $request->password;

        if ($pageData['username'] == 'raymond' && $pageData['password'] == '2455301164') {
            $respon = "Success";
        } else {
            $respon = "Login failed";
        }
        return view('login-form', compact('respon'));

    }
    public function login1(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $users = DB::table('akun')->get();
        foreach ($users as $user) {
            if ($user->username == $request->username && Hash::check($request->password, $user->password)) {
                session(['user' => $user]);
                return redirect('home')->with('info', 'Login berhasil, Selamat datang ' . $user->nama);
            }
        }
        return back()->with('info', 'Username atau password salah!');
    }
    public function signup(Request $request)
    {
        $users = DB::table('akun')->get();

        foreach ($users as $user) {
            if ($user->username == $request->username) {
                session(['user' => $user]);
                return redirect()->route('reg')->with('info', 'Username sudah ada!');
        }
        $request->validate([
            'username' => 'required|string|unique:akun,username',
        ]);
        DB::table('akun')->insert([
            'nama'     => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('start')->with('info', 'Registrasi berhasil! Silakan login.');
        }
    }
}
