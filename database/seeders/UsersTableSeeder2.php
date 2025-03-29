<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 2 - add more users
        $users = [
            [
                'name' => 'user1',
                'password'=> bcrypt('senha')
            ],
            [
                'name' => 'user2',
                'password'=> bcrypt('senha')
            ],
            [
                'name' => 'user3',
                'password'=> bcrypt('senha')
            ],
        ];
        DB::table('users')->insert($users);

    }
}
