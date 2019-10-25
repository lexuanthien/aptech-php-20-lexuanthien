<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtitlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thien = Faker\Factory::create(); //sử dụng Faker Library để thêm dữ liệu vào bảng
        for($i = 0; $i < 3; $i++) {
            DB::table('artitles')->insert(
                ['title' => $thien->sentence($nbWords = 6, $variableNbWords = true),
                'content' => $thien->text($maxNbChars = 200),
                'category_id' => rand(1, 3),
                ]
            );
        }; 
    }
}
