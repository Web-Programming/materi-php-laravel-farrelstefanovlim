<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProdiController extends Controller
{
   private $dataProdi = [
        ['no' => 1, 'nama_prodi' => 'Informatika'],
        ['no' => 2, 'nama_prodi' => 'Teknik Kimia'],
        ['no' => 3, 'nama_prodi' => 'Manajemen']
    ];
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('prodi.index', ['prodi' => collect($this->dataProdi)]);
    }

    public function create()
    {
        return view('prodi.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('prodi.index')->with('success', 'Data Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $no)
    {
        $prodi = collect($this->dataProdi)->firstWhere('no', $no);

        if(!$prodi)
        {
            return redirect()->route('prodi.index')->with('error', 'Materi tidak ditemukan');
        } else 
        {
        return view('prodi.detail', compact('prodi'));
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
        return redirect()->route('prodi.index')->with('success', 'Data Berhasil dihapus');
    }
}
