<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\FakultasController;

Route::get('/materi', [MateriController::class, 'show']);
Route::get('/prodi', [MateriController::class, 'show']);
Route::get('/mhs', [MateriController::class, 'show']);
Route::get('/dosen', [MateriController::class, 'show']);
Route::get('/fakultas', [MateriController::class, 'show']);

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get("/berita/{id}/{title?}", function($id, $title = NULL) {
    return view("berita", ['id' => $id, 'title' => $title]);
});

Route::get("/total/{angka1}/{angka2}/{angka3}", function($angka1, $angka2, $angka3 = 0){
    return view("hasil", 
        ['total' => $angka1 + $angka2 + $angka3, 
        'angka1' => $angka1,
        'angka2' => $angka2, 
        'angka3' => $angka3
    ]);
});

Route::get('/', function () {
    return view('home.home'); // folder 'home' dan file 'home.blade.php'
});


