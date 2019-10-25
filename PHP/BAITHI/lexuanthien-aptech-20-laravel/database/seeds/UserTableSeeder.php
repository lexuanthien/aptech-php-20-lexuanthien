<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thien = Faker\Factory::create();
        for($i = 0;$i < 10; $i++) {
            User::create([
                'name' => $thien->firstNameMale,
                'email' => $thien->safeEmail,
                'password' => $thien->password,
            ]);
        }

    }
}
