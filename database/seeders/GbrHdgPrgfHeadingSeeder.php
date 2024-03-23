<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GbrHdgPrgfHeadingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gbr__hdg__prgf__headings')->insert([
            [
                'id' => '30ba5800-9b8e-4ebe-ae6a-a1921fdd8919',
                'id_gbr_hdg_prgf' => '2384eb5e-1e17-4080-98c8-4061dd10cde0',
                'nama_heading' => 'Tentang Kami',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '7b677b1c-3d79-4c88-b91e-28bc5a20d3b3',
                'id_gbr_hdg_prgf' => '2384eb5e-1e17-4080-98c8-4061dd10cde0',
                'nama_heading' => 'Visi Misi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        //id	id_gbr_hdg_prgf	nama_heading	jumlah_paragraf	created_at	updated_at	
    }
}
