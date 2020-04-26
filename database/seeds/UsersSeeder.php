<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'is_admin'=>'1',
                'address' => 'jl kopo gg sukaleleur no 53',
                'password'=> bcrypt('123456'),
                'city_id' => 23,
            ],
            [
                'name'=>'User',
                'email'=>'user@gmail.com',
                'is_admin'=>'0',
                'address' => 'jl leuwipanjang no 108',
                'password'=> bcrypt('123456'),
                'city_id' => 10,
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
