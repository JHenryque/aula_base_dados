<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder3 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 3 - add users with random data
        $users = [];
        for ($i = 1; $i <= 10; $i++) {
            $users[] = [
                'name' => Str::random(10),
                'password'=> bcrypt('senha'),
                'active'=> (bool) rand(0, 1),
            ];
        }
        DB::table('users')->insert($users);
    }
}
