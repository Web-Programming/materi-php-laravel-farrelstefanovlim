<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DosenController extends Controller
{
    private $dataDosen = [
        ['NIP' => 1, 'nama_dosen' => 'Larry'],
        ['NIP' => 2, 'nama_dosen' => 'Soekitmo'],
        ['NIP' => 3, 'nama_dosen' => 'Clara']
    ];
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dosen.index', ['dosen' => collect($this->dataDosen)]);
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('dosen.index')->with('success', 'Data Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $NIP)
    {
        $dosen = collect($this->dataDosen)->firstWhere('NIP', $NIP);

        if(!$dosen)
        {
            return redirect()->route('dosen.index')->with('error', 'Materi tidak ditemukan');
        } else 
        {
        return view('dosen.detail', compact('dosen'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $NIP)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $NIP)
    {
        return redirect()->route('dosen.index')->with('success', 'Data Berhasil dihapus');
    }
}
