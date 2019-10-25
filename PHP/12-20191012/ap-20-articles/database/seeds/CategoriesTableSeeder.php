<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thien = Faker\Factory::create(); //sử dụng Faker Library để thêm dữ liệu vào bảng
        for($i = 0; $i < 5; $i++) {
            DB::table('categories')->insert(
                ['name' => $thien->sentence($nbWords = 10, $variableNbWords = true),
                'description_cat' => $thien->text($maxNbChars = 200)
                ]
            );
        }; 
    }
}
