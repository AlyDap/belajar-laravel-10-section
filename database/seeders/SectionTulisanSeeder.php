<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SectionTulisanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('section__tulisans')->insert([
            [
                'id' => Str::uuid(),
                'id_section' => '3a7000b4-b853-453b-8d70-8d7ba0959ac3',
                'tulisan' => 'SUBSCRIBE YT ALYDAP',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'id_section' => '9a52abab-c492-4664-a599-478829508db6',
                'tulisan' => 'Selamat Datang Player Baru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
