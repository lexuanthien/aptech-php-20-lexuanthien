<?php

use Illuminate\Database\Seeder;
use App\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $UserArray = [1,2,3,4,5,6,7,8,9,10];
        $CategoryArray = [1,2,3,4,5,6,7];
        $thien = Faker\Factory::create();
        for($i = 0;$i < 10; $i++) {
            Post::create([
                'title' => $thien->text($maxNbChars = 20),
                'description' => $thien->text($maxNbChars = 200),
                'content' => $thien->text($maxNbChars = 200),
                'numberlike' => 0,
                'image'=> 'link-hinh-anh',
                'slug' => str_slug($thien->text($maxNbChars = 20)),
                'user_id' => array_random($UserArray),
                'category_id' => array_random($CategoryArray)
            ]);
        }
    }
}
