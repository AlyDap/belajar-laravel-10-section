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
                'file_gambar' => 'slideshow-1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '2',
                'id_section' => '1',
                'file_gambar' => 'slideshow-2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '3',
                'id_section' => '1',
                'file_gambar' => 'slideshow-3.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '4',
                'id_section' => '1',
                'file_gambar' => 'slideshow-4.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '5',
                'id_section' => '1',
                'file_gambar' => 'slideshow-5.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
