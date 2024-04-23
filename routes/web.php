<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {

    $nama = "ridho";
    $jenis_kelamin = "laki-laki";
    $pendidikan_terakhir = "smk";
    $pekerjaan = "nggangoer";
    $alamat = "jl sekeawi";
    return view('data_diri', compact('nama','jenis_kelamin','pendidikan_terakhir','pekerjaan','alamat'));
});

Route::get('/saya', function () {

    $nama = "MOHAMMAD RIDHO ALAMSYAH";
    $jenis_kelamin = "LAKI-LAKI";
    $umur = "17";
    $pendidikan_terakhir = "SMK";
    $pekerjaan = "PENGUSAHA";
    $alamat = "JL SEKEAWI";
    $hobi = "MAIN GAME";
    $ttl = "BANDUNG,31 JULI 2006";
    $citacita = "KOPASUS";
    $status = "SINGLE";
    $nomer = "08971575423";

    return view('diri_saya',compact('nama','jenis_kelamin',
    'umur',
    'pendidikan_terakhir','pekerjaan','alamat','hobi','ttl','citacita','status','nomer'));
});
