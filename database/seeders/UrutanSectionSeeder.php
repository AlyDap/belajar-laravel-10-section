<?php

namespace Database\Seeders;

use Faker\Core\Uuid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UrutanSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('urutan__sections')->insert([
            [
                'id' => '1',
                'deskripsi_section' => 'section gambar slide show',
                'jenis_section' => 'slide show',
                'urutan_section' => '3',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '2',
                'deskripsi_section' => 'section map peta',
                'jenis_section' => 'peta',
                'urutan_section' => '5',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '3',
                'deskripsi_section' => 'section gambar besar seperti gambar sekolah dengan width 100% height +- 70-80%',
                'jenis_section' => 'gambar full',
                'urutan_section' => '1',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '4',
                'deskripsi_section' => 'section tulisan dengan warna background, tulisannya besar seperti tulisan selamat datang',
                'jenis_section' => 'tulisan dengan bg warna full',
                'urutan_section' => '2',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '5',
                'deskripsi_section' => 'section yang ada gambar di kiri, kemudian tulisan heading dan text di kanan',
                'jenis_section' => 'gambar heading paragraf',
                'urutan_section' => '4',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
