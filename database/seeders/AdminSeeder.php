<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
    {
        DB::table('admins')->insert([
            [
                'nom' => "Ahmed",
                'email' => "admin_Ahmed@gmail.com",
                'password' => Hash::make("PHP12345")
            ],
            [
                'nom' => "Youssef",
                'email' => "admin_Yousef@gmail.com",
                'password' => Hash::make("12345H")
            ]
        ]);
}
}
