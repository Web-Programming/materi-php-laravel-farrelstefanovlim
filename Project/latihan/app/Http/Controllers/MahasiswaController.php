<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MahasiswaController extends Controller
{
    private $dataMahasiswa = [
        ['NPM' => 1, 'Nama' => 'Budi Andreas'],
        ['NPM' => 2, 'Nama' => 'Siska Timil'],
        ['NPM' => 3, 'Nama' => 'Coki Larren']
    ];
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mahasiswa.index', ['mahasiswa' => collect($this->dataMahasiswa)]);
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('mahasiswa.index')->with('success', 'Data Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $NPM)
    {
        $mahasiswa = collect($this->dataMahasiswa)->firstWhere('NPM', $NPM);

        if(!$mahasiswa)
        {
            return redirect()->route('mahasiswa.index')->with('error', 'Mahasiswa tidak ditemukan');
        } else 
        {
        return view('mahasiswa.detail', compact('mahasiswa'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $NPM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $NPM)
    {
        return redirect()->route('mahasiswa.index')->with('success', 'Data Berhasil dihapus');
    }
}
