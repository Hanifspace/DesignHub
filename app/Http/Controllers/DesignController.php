<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DesignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('dashboard.user');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('session.Input');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:40',
            'project_title' => 'required|min:5|max:30',
            'phone_number' => 'required|min:7|max:16',
            'date' => 'required|date',
            'brief' => 'required|min:15',
        ]
        );
        $credentials = [
            'name' => $request->name,
            'project_title' => $request->project_title,
            'phone_number' => $request->phone_number,
            'date' => $request->date,
            'brief' => $request->brief,
        ];

        $credentials['user_id'] = Auth::id();

        Design::create($credentials);
        return redirect()->route('dashboard.user')->with('berhasil', 'Data berhasil dikirim');

        if (!Design::create($credentials)) {
            return redirect()->back()->withErrors('Isi data dengan benar');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Design $design)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Design $design)
{
    // Ambil data berdasarkan ID
    $data = Design::where('id', $design->id)->first();
    
    // Kirim data ke view
    return view('edit', compact('data'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Design $design)
    {
         $request->validate([
            'name' => 'required',
            'project_title' => 'required',
            'phone_number' => 'required',
            'date' => 'required|date',
            'brief' => 'required|min:15',
        ]
        );
        $credentials = [
            'name' => $request->name,
            'project_title' => $request->project_title,
            'phone_number' => $request->phone_number,
            'date' => $request->date,
            'brief' => $request->brief,
        ];

        Design::where('id', $design->id)->update($credentials);
        return redirect()->route('dashboard.user')->with('berhasil', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Design $design)
    {
        Design::where ('id', $design->id)->delete();
        return redirect()->route('dashboard.user')->with('berhasil', 'Data berhasil dihapus');
    }
}
