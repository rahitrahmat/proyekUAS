<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dosen = Dosen::all();
        return view('dosen.index', compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'jurusan' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image ->move(public_path('images'), $imageName);

        Dosen::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'jurusan' => $request->jurusan,
            'image' => $imageName,
        ]);

        return redirect()->route('dosen.index')->with('success', 'Dosen created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        //
        return view('dosen.show', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        //
        return view('dosen.edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        //
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'jurusan' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image ->move(public_path('images'), $imageName);

        $dosen->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'image' => $imageName,
        ]);

        return redirect()->route('dosen.index')->with('success', 'Dosen updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        //
        $dosen->delete();

        return redirect()->route('dosen.index')->with('success', 'Dosen deleted successfully.');
    }
}
