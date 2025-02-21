<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminAcount extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'masadmin',
            'email' => 'masadmin@gmail.com',
            'password' => Hash::make('masadmin123'),
            'role' => 'admin',
        ]);
    }
}
