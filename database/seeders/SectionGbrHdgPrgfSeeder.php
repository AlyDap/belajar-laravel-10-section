<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionGbrHdgPrgfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('section__gbr__hdg__prgfs')->insert([
            [
                'id' => '1',
                'id_section' => '3',
                'jumlah_gambar' => '3',
                'jumlah_heading' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
