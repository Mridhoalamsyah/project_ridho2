<?php

namespace Database\Seeders;

use App\Models\warga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\mahasiswa;
use App\Models\wali;


class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        warga::insert([
        'nama'=>'ridho',
        'jenis_kelamin' => 0,
        'alamat'=>'jl cibadyut',
     ]);

     warga::insert([
        'nama'=> 'ikhsan',
        'jenis_kelamin' => 0,
        'alamat'=>'jl kota baru',
     ]);

     warga::insert([
        'nama' => 'apipah',
        'jenis_kelamin' => 1,
        'alamat' =>'jl cibadyut',
     ]);
     warga::insert([
        'nama' => 'desi',
        'jenis_kelamin' => 1,
        'alamat' =>'jl sekeawi',
     ]);
     warga::insert([
        'nama' => 'pajar',
        'jenis_kelamin' => 0,
        'alamat' =>'jl bojong',
     ]);
    }
}
