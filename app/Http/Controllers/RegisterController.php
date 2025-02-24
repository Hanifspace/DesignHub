<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('session.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'name' => 'required|min:3',
        'email' => 'email|required',
        'password' => 'min:8|required',
    ], [
        'name.required' => 'Isi username dulu bang',
        'email.required' => 'Isi email dulu bang',
        'password.required' => 'Masukin password dulu bang',
    ]);

    // Periksa apakah email sudah terdaftar
    if (\App\Models\User::where('email', $request->email)->exists()) {
        return redirect()->back()->withErrors(['email' => 'Email sudah terdaftar, ganti dengan email lain.'])->withInput();
    }

    // Simpan data user baru
    $crt = [
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password), // Enkripsi password
    ];

    \App\Models\User::create($crt);

    return redirect()->route('login')->with('success', 'Berhasil bikin akun bang');
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
    public function destroy(string $id)
    {
        //
    }
}
