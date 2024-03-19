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
                'id' => '1',
                'id_gbr_hdg_prgf' => '1',
                'nama_heading' => 'Tentang Kami',
                'jumlah_paragraf' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '2',
                'id_gbr_hdg_prgf' => '1',
                'nama_heading' => 'Visi Misi',
                'jumlah_paragraf' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        //id	id_gbr_hdg_prgf	nama_heading	jumlah_paragraf	created_at	updated_at	
    }
}
