<?php

use Illuminate\Support\Facades\Route;

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