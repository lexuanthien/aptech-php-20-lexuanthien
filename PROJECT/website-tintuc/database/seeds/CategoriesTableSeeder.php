<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            ['name'=> 'MOBILE'], ['name' => 'INTERNET'], ['name' => 'ESPORTS'], ['name' => 'CÔNG NGHỆ'], ['name' => 'ĐÁNH GIÁ'], ['name' => 'KHÁM PHÁ'], ['name' => 'CỘNG ĐỒNG']
        ]);
    }
}
