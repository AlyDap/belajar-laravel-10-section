<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlideshowGambarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('slideshow__gambars')->insert([
            [
                'id' => '1',
                'id_slideshow' => '1',
                'file_gambar' => 'slideshow-1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '2',
                'id_slideshow' => '1',
                'file_gambar' => 'slideshow-2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '3',
                'id_slideshow' => '1',
                'file_gambar' => 'slideshow-3.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '4',
                'id_slideshow' => '1',
                'file_gambar' => 'slideshow-4.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '5',
                'id_slideshow' => '1',
                'file_gambar' => 'slideshow-5.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        //	id	id_slideshow	file_gambar	created_at	updated_at	

    }
}
