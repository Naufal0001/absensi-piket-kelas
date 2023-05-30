<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Siswa;
use App\Models\Jadwal;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Jadwal::create([
            'hari' => 'Senin',
        ]);
        Jadwal::create([
            'hari' => 'Selasa',
        ]);
        Jadwal::create([
            'hari' => 'Rabu',
        ]);
        Jadwal::create([
            'hari' => 'Kamis',
        ]);
        Jadwal::create([
            'hari' => 'Jumat',
        ]);

        Siswa::create([
            'nama' => 'murdog',
            'nis' => 681239168,
            'id_jadwal' => Jadwal::first()->id,
            'jenis_kelamin' => "Laki Laki"
        ]);
        Siswa::create([
            'nama' => 'murdog 2',
            'nis' => 681239168,
            'id_jadwal' => 2,
            'jenis_kelamin' => "Laki Laki"
        ]);
        Siswa::create([
            'nama' => 'murdog 6',
            'nis' => 681239168,
            'id_jadwal' => 2,
            'jenis_kelamin' => "Laki Laki"
        ]);
        Siswa::create([
            'nama' => 'murdog 8',
            'nis' => 681239168,
            'id_jadwal' => 2,
            'jenis_kelamin' => "Laki Laki"
        ]);
        Siswa::create([
            'nama' => 'murdog 9',
            'nis' => 681239168,
            'id_jadwal' => 3,
            'jenis_kelamin' => "Laki Laki"
        ]);
        Siswa::create([
            'nama' => 'murdog 4',
            'nis' => 681239168,
            'id_jadwal' => 4,
            'jenis_kelamin' => "Laki Laki"
        ]);
        Siswa::create([
            'nama' => 'murdog 5',
            'nis' => 681239168,
            'id_jadwal' => 5,
            'jenis_kelamin' => "Laki Laki"
        ]);

        User::create([
            "name" => "udin",
            "email"=> "email@gmail.com",
            "password" => bcrypt("password")
        ]);
    }
}
