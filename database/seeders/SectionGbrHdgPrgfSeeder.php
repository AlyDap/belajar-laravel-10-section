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
                'id' => '2384eb5e-1e17-4080-98c8-4061dd10cde0',
                'id_section' => '3dbb24ce-e64b-4c55-a79c-26d6f63c8556',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
