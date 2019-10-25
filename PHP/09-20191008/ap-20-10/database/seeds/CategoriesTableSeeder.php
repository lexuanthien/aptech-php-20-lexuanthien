<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        for($i = 0; $i < 3; $i++) {
            DB::table('categories')->insert(
                ['name' => $thien->sentence($nbWords = 2, $variableNbWords = true),]
            );
        }; 
    }
}
