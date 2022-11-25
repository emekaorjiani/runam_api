<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'RunAm Admin',
                'email'          => 'admin@runam.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
                'avatar'         => '',
            ],
            [
                'id'             => 2,
                'name'           => 'Emeka Orjiani',
                'email'          => 'emekaorjiani@icreationsent.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
                'avatar'         => '',
            ],
        ];

        User::insert($users);
    }
}
