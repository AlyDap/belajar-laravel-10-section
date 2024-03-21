<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSlideshowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('section__slideshows')->insert([
            [
                'id' => '1',
                'id_section' => '1',
                'jumlah_gambar' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
