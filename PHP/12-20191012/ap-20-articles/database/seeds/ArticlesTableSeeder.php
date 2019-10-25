<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thien = Faker\Factory::create(); //sử dụng Faker Library để thêm dữ liệu vào bảng
        $categoriesIDsArray = [1,2,3,4,5];
        for($i = 0; $i < 20; $i++) {
            Article::insert(
                ['title' => $thien->text($maxNbChars = 100),
                'description' => $thien->text($maxNbChars = 200),
                'content' => $thien->text($maxNbChars = 200),
                'category_id'=> array_random($categoriesIDsArray)
                ]
            );
   
        };
    }
}
