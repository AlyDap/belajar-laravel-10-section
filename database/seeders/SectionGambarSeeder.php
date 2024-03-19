<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SectionGambarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('section__gambars')->insert([
            [
                'id' => '1',
                'id_section' => '3',
                'file_gambar' => 'gambarbesar.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
