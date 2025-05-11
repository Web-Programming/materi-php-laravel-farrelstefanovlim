<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class FakultasController extends Controller
{
    private $dataFakultas = [
        ['no' => 1, 'nama_fk' => 'Fakultas Teknik dan Rekayasa'],
        ['no' => 2, 'nama_fk' => 'Fakultas Sains'],
        ['no' => 3, 'nama_fk' => 'Fakultas Bisnis']
    ];
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('fakultas.index', ['fakultas' => collect($this->dataFakultas)]);
    }

    public function create()
    {
        return view('fakultas.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('fakultas.index')->with('success', 'Data Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $no)
    {
        $fakultas = collect($this->dataFakultas)->firstWhere('no', $no);

        if(!$fakultas)
        {
            return redirect()->route('fakultas.index')->with('error', 'Materi tidak ditemukan');
        } else 
        {
        return view('fakultas.detail', compact('fakultas'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $no)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $no)
    {
        return redirect()->route('fakultas.index')->with('success', 'Data Berhasil dihapus');
    }
}
