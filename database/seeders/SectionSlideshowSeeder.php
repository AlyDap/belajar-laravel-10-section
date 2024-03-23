<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SectionSlideshowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('section__slideshows')->insert([
            [
                'id' => Str::uuid(),
                'id_section' => '785a0503-2157-49f3-bc5c-fd0a5af66cd7',
                'file_gambar' => 'slideshow-1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'id_section' => '785a0503-2157-49f3-bc5c-fd0a5af66cd7',
                'file_gambar' => 'slideshow-2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'id_section' => '785a0503-2157-49f3-bc5c-fd0a5af66cd7',
                'file_gambar' => 'slideshow-3.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'id_section' => '785a0503-2157-49f3-bc5c-fd0a5af66cd7',
                'file_gambar' => 'slideshow-4.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'id_section' => '785a0503-2157-49f3-bc5c-fd0a5af66cd7',
                'file_gambar' => 'slideshow-5.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
