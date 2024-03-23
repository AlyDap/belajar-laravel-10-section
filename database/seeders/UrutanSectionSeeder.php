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
                'id' => '785a0503-2157-49f3-bc5c-fd0a5af66cd7',
                'deskripsi_section' => 'section gambar slide show',
                'jenis_section' => 'slide show',
                'urutan_section' => '3',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '05225b8c-c6c6-4043-9f0b-43b7b892c106',
                'deskripsi_section' => 'section map peta',
                'jenis_section' => 'peta',
                'urutan_section' => '5',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '19b15e15-66f2-44ed-ab56-8c8bfa89aef2',
                'deskripsi_section' => 'section gambar besar seperti gambar sekolah dengan width 100%',
                'jenis_section' => 'gambar full',
                'urutan_section' => '1',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '3a7000b4-b853-453b-8d70-8d7ba0959ac3',
                'deskripsi_section' => 'section tulisan dengan warna background, tulisannya besar seperti tulisan selamat datang',
                'jenis_section' => 'tulisan dengan bg warna full',
                'urutan_section' => '2',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '3dbb24ce-e64b-4c55-a79c-26d6f63c8556',
                'deskripsi_section' => 'section yang ada gambar di kiri, kemudian tulisan heading dan text di kanan',
                'jenis_section' => 'gambar heading paragraf',
                'urutan_section' => '4',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '458f263f-0719-43f3-b81a-e98c4191db11',
                'deskripsi_section' => 'Peta Kontrakan',
                'jenis_section' => 'peta',
                'urutan_section' => '6',
                'status' => 'inactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '9a52abab-c492-4664-a599-478829508db6',
                'deskripsi_section' => 'text dengan tulisan berlatar warna width max',
                'jenis_section' => 'tulisan dengan bg warna full',
                'urutan_section' => '7',
                'status' => 'inactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
