<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GbrHdgPrgfHeadingParagrafSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gbr__hdg__prgf__heading__paragrafs')->insert([
            [
                'id' => Str::uuid(),
                'id_gbr_hdg_prgf_head' => '30ba5800-9b8e-4ebe-ae6a-a1921fdd8919',
                'text_paragraf' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque debitis omnis velit officia ullam voluptates voluptatem, facere maxime explicabo vero optio at labore sint dicta rem tempore adipisci nostrum aspernatur?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'id_gbr_hdg_prgf_head' => '30ba5800-9b8e-4ebe-ae6a-a1921fdd8919',
                'text_paragraf' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, aspernatur saepe beatae explicabo corporis debitis fugiat neque ratione harum ad, fugit illum esse aut quidem asperiores autem, odio quos distinctio voluptatem mollitia recusandae ab! Architecto asperiores quos magni repudiandae! Id quia aut perferendis laboriosam facilis sint adipisci asperiores explicabo esse perspiciatis cumque nesciunt veritatis quos dolorem, impedit ut culpa ea tempora!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'id_gbr_hdg_prgf_head' => '7b677b1c-3d79-4c88-b91e-28bc5a20d3b3',
                'text_paragraf' => 'Modi, ducimus nesciunt quas eius nihil id ullam minima voluptatem tenetur, rem ut necessitatibus, corporis non est distinctio recusandae deleniti atque commodi placeat corrupti at laborum? Aperiam, at, inventore non vel porro culpa blanditiis, nulla neque aliquam voluptate debitis!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        //id	id_gbr_hdg_prgf_head	text-paragraf	created_at	updated_at	
    }
}
