<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thien = Faker\Factory::create();
        for($i = 0; $i < 10; $i++) {
            DB::table('posts')->insert(
                ['title' => $thien->sentence($nbWords = 6, $variableNbWords = true),'description' => $thien->address,]
            );
        }; 
    }
}
