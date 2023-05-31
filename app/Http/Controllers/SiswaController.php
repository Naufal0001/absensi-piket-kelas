<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Siswa::all();
        return view('/form-siswa', compact('data'));
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
        $validatedData = $request->validate([
            'id_jadwal' => 'required',
            'nis' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
        ]);
    
        Siswa::create($validatedData);
        return redirect('/form-siswa')->with('success', 'Post created successfully!');
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
        $data = Siswa::findOrFail($id);
        return view('edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'id_jadwal' => 'required',
            'nis' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
        ]);
    
        Siswa::whereId($id)->update($validatedData);
        return redirect('/data')->with('success', 'Siswa updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Siswa::findOrFail($id)->delete();
        return redirect('/data')->with('success', 'Siswa deleted successfully!');
    }
}
