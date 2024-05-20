<?php

namespace Database\Seeders;

use App\Models\Siswa;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\mahasiswa;
use App\Models\wali;


class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::insert([
            'nama'=> "mohamamd ridho",
            'jenis_kelamin' => 0,
            'umur' => 20,
            'alamat' => "jl sekeawi",
        ]);

        Siswa::insert([
            'nama'=> "ikhsan",
            'jenis_kelamin' => 0,
            'umur' => 18,
            'alamat' => "jl kota baru",
        ]);

        Siswa::insert([
            'nama'=> "fajar",
            'jenis_kelamin' => 0,
            'umur' => 18,
            'alamat' => "jl rancamanyar",
        ]);

        Siswa::insert([
            'nama'=> "apipah",
            'jenis_kelamin' => 1,
            'umur' => 19,
            'alamat' => "jl sekeawi",
        ]);

        Siswa::insert([
            'nama'=> "farel",
            'jenis_kelamin' => 0,
            'umur' => 18,
            'alamat' => "jl sayuran",
        ]);

        Siswa::insert([
            'nama'=> "Sahwal",
            'jenis_kelamin' => 0,
            'umur' => 18,
            'alamat' => "jl kota baru",
        ]);

        Siswa::insert([
            'nama'=> "saliman",
            'jenis_kelamin' => 0,
            'umur' => 18,
            'alamat' => "jl sekeawi",
        ]);

        //
    }
}
