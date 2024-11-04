<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//week 2

Route::get('/mahasiswa', function(){
    $nama = 'Tya Kirana Putri';
    $nilai = 75;
    $arrMahasiswa = [
        "mahasiswa01" => "Risa Lestari",
        "mahasiswa02" => "Rudi Hermawan",
        "mahasiswa03" => "Bambang Kusumo",
        "mahasiswa04" => "Lisa Permata",
    ];
    return view('mahasiswa', compact('nama', 'nilai'), ['mahasiswa' => $arrMahasiswa]);
});