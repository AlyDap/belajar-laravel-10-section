<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GbrHdgPrgfGambarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gbr__hdg__prgf__gambars')->insert([
            [
                'id' => '1',
                'id_gbr_hdg_prgf' => '1',
                'file_gambar' => 'gambar1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '2',
                'id_gbr_hdg_prgf' => '1',
                'file_gambar' => 'gambar2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '3',
                'id_gbr_hdg_prgf' => '1',
                'file_gambar' => 'gambar3.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        //	id	id_gbr_hdg_prgf	file_gambar	created_at	updated_at	

    }
}