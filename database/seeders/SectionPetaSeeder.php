<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SectionPetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('section__petas')->insert([
            [
                'id' => Str::uuid(),
                'id_section' => '2',
                'url_peta' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.7359559251254!2d107.15889847356354!3d-6.801942666522971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68531746660c83%3A0x872f7eb20922929f!2sVetencode!5e0!3m2!1sen!2sid!4v1710854908514!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'id_section' => '6',
                'url_peta' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2945.7995814821697!2d107.16341846582743!3d-6.793113628129199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6853ea3216069d%3A0x486dfc964a38f106!2sKontrakan%20H.%20Dayat!5e0!3m2!1sen!2sid!4v1711166325590!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
