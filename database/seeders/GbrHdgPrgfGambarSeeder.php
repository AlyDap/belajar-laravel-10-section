<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GbrHdgPrgfGambarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gbr__hdg__prgf__gambars')->insert([
            [
                'id' => Str::uuid(),
                'id_gbr_hdg_prgf' => '2384eb5e-1e17-4080-98c8-4061dd10cde0',
                'file_gambar' => 'gambar1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'id_gbr_hdg_prgf' => '2384eb5e-1e17-4080-98c8-4061dd10cde0',
                'file_gambar' => 'gambar2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'id_gbr_hdg_prgf' => '2384eb5e-1e17-4080-98c8-4061dd10cde0',
                'file_gambar' => 'gambar3.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        //	id	id_gbr_hdg_prgf	file_gambar	created_at	updated_at	

    }
}
