<?php

namespace Database\Seeders;

use App\Models\info;
use App\Models\kampus;
use App\Models\kategori;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        kategori::create([
            'idkategori'=>9,
            'nama'=>'gg',
        ]);

        kampus::create([
            'idkampus'=>0,
            'nama'=>'ff',
            'alamat'=>'bumi',
            'idkategori'=>9,
        ]);

        info::create([
            'idinfo'=>88,
            'judul'=>'dongeng',
            'tanggal'=>231212,
            'idkampus'=>0,
        ]);
    }
}
