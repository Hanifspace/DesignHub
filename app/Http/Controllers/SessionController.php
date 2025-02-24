<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\ElseIf_;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('session.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('landing')->with('success', 'berhasil logout bang');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:8'
    ], [
        'email.required' => 'email harus diisi bang',
        'password.required' => 'masukin passwordnya bg',
        'password.min' => 'jangan pendek pendek bang passwordnya'
    ]);

    $email = $request->email;
    $password = $request->password;

    // Cek email terlebih dahulu
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return redirect()->back()->withErrors(['email' => 'Email yang Anda masukkan tidak valid.'])->withInput();
    }

    // Cek apakah user dengan email tersebut ada
    $user = \App\Models\User::where('email', $email)->first();

    // Jika tidak ada user dengan email tersebut
    if (!$user) {
        return redirect()->back()->withErrors(['email' => 'Email tidak terdaftar.'])->withInput();
    }

    // Jika email ada, cek password
    if (!Auth::attempt(['email' => $email, 'password' => $password])) {
        return redirect()->back()->withErrors(['password' => 'Password yang Anda masukkan salah.'])->withInput();
    }

    if (Auth::user()->role === 'user') {
        return redirect()->route('dashboard.user')->with('success', 'berhasil login');
    } elseif (Auth::user()->role === 'admin') {
        return redirect()->route('dashboard.admin')->with('success', 'berhasil login');
    } else {
        echo "tes";
    }
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user) 
    {
        Auth::logout();
        return redirect()->route('landing')->with('success', 'berhasil logout bang');
    }
}
