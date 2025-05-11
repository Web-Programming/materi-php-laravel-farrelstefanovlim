<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MateriController extends Controller
{
    private $dataMateri = [
        ['id' => 1, 'judul' => 'Pemrograman Laravel'],
        ['id' => 2, 'judul' => 'Basis Data II'],
        ['id' => 3, 'judul' => 'Program Niaga']
    ];
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('materi.index', ['materi' => collect($this->dataMateri)]);
    }

    public function create()
    {
        return view('materi.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('materi.index')->with('success', 'Data Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $materi = collect($this->dataMateri)->firstWhere('id', $id);

        if(!$materi)
        {
            return redirect()->route('materi.index')->with('error', 'Materi tidak ditemukan');
        } else 
        {
        return view('materi.detail', compact('materi'));
        }
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
        return redirect()->route('materi.index')->with('success', 'Data Berhasil dihapus');
    }
}
