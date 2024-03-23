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
                'id_section' => '4',
                'tulisan' => 'SUBSCRIBE YT ALYDAP',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'id_section' => '7',
                'tulisan' => 'Selamat Datang Player Baru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
