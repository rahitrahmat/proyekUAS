<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {


        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image ->move(public_path('images'), $imageName);

        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'image' => $imageName,
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa created successfully.');
    }

    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image ->move(public_path('images'), $imageName);

        $mahasiswa->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'image' => $imageName,
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa updated successfully.');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa deleted successfully.');
    }
}
