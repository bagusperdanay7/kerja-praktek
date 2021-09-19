<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Nambah Data Dummy pada Database Pekejraan Lapangan
        \App\Models\PekerjaanLapangan::factory(10)->create();
    }
}
