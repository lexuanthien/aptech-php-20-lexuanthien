<?php

use App\User;
use Illuminate\Database\Seeder;

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
            User::insert(
                ['name' => $thien->lastName,
                'email' => $thien->email,
                'password' => $thien->password,]
            );
            //cách 2:
            // $thien = Faker\Factory::create(); //sử dụng Faker Library để thêm dữ liệu vào bảng
            // for($i = 0; $i < 10; $i++) {
            // $users = new User;
            // $users->name = $thien->lastName;
            // $users->email = $thien->email;
            // $users->password = $thien->password;
            // $users->save(); 
                //};   
         };
    }
}
