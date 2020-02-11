<?php

use Illuminate\Database\Seeder;
use App\Comment;
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $UserArray = [1,2];
        $PostArray = [1,2,3,4,5,6,7,8,9,10];
        $thien = Faker\Factory::create();
        for($i = 0;$i < 2; $i++) {
            Comment::create([
                'content_comment' => $thien->text($maxNbChars = 200),
                'user_id' => array_random($UserArray),
                'post_id' => array_random($PostArray)
            ]);
        }
    }
}
