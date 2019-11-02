<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $RoleArray = [1,2,3];
        $thien = Faker\Factory::create();
        for($i = 0;$i < 2; $i++) {
            User::create([
                'name' => $thien->firstNameMale,
                'email' => $thien->safeEmail,
                'password' => $thien->password,
                'role_id' => array_random($RoleArray),
            ]);
        }
    }
}
