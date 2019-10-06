<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //chú ý chèn dòng này

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thien = Faker\Factory::create(); //sử dụng Faker Library để thêm dữ liệu vào bảng
        for($i = 0; $i < 10; $i++) {
            DB::table('users')->insert(
                ['name' => $thien->lastName,
                'email' => $thien->freeEmail,
                'password' => $thien->password,]
            );
        }; 

        // Hoặc như này (thêm dữ liệu bằng cách tự viết)

        //for($i = 0; $i < 10; $i++) {
            //DB::table('users')->insert(
                //['name' => 'thien',
                // 'email' => 'xuanthien14031998qt@gmail.com',
                // 'password' => 'xuanthien143',]
            //);
        //};
    }
}
