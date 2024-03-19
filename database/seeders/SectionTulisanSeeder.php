<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionTulisanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('section__tulisans')->insert([
            'id' => '1',
            'id_section' => '4',
            'tulisan' => 'Selamat Datang Player Baru',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
