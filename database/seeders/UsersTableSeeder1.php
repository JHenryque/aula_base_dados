<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder1 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1 - add users directly
        // 'password'=> bcrypt('senha')
        DB::table('users')->insert([
            'name' => 'user1',
            'password' => Hash::make('senha'),
            'active'=> true,
        ]);
    }
}
