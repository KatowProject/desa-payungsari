<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Pegawai::factory(10)->create();
        \App\Models\Post::factory(10)->create();
        \App\Models\User::create([
            'nama' => 'Admin Desa Payungsari',
            'username' => 'admin',
            'password' => 'Payungsari2023',
            'email' => 'admindesapayungsari@gmail.com',
        ]);
    }
}
