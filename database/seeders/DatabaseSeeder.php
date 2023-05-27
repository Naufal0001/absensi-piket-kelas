<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Jadwal;
use App\Models\Siswa;
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
            'hari' => 'senin',
        ]);
        Jadwal::create([
            'hari' => 'selasa',
        ]);
        Jadwal::create([
            'hari' => 'rabu',
        ]);
        Jadwal::create([
            'hari' => 'kamis',
        ]);
        Jadwal::create([
            'hari' => 'jumat',
        ]);
        Siswa::create([
            'nama' => 'murdog',
            'nis' => 681239168,
            'id_jadwal' => Jadwal::first()->id,
            'jenis_kelamin' => "Laki Laki"
        ]);

    }
}
