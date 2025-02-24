<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Design = Design::all();
        return view('dashboard.admin', compact('Design'));
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
        //
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
    public function updateStatus(Request $request, string $id)
    {
            $request->validate([
        'status' => 'required|string'
    ]);

    $design = Design::findOrFail($id);
    $design->status = $request->status;
    $design->save();

    return redirect()->back()->with('success', 'Status updated successfully!');
    }

public function uploadImage(Request $request, $id)
{
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10000',
    ]);

    $design = Design::findOrFail($id);

    if ($request->hasFile('image')) {
        // Hapus gambar lama jika ada
        if ($design->image && file_exists(public_path('uploads/' . $design->image))) {
            unlink(public_path('uploads/' . $design->image));
        }

        // Simpan gambar baru dengan nama unik
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);

        // Simpan nama file ke database
        $design->image = $imageName;
        $design->save();
    }

    return redirect()->back()->with('success', 'Image uploaded successfully.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}