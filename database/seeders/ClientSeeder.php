<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clients')->insert([
            [
                'nom' => 'Ahmed',
                'prenom' => 'Tazi',
                'email' => 'ahmed_tazi@gmail.com',
                'password' => Hash::make('12345Aa'),
                'Adresse' => 'fes',
                'Tel' => '+212 6 10 35 12 48',
            ],
            [
                'nom' => 'Naoual',
                'prenom' => 'Alami',
                'email' => 'alami-noual@gmail.com',
                'password' => Hash::make('aa12345A'),
                'Adresse' => 'Rabat',
                'Tel' => '+212 7 10 67 12 09',
            ],
            [
                'nom' => 'Touati',
                'prenom' => 'Sara',
                'email' => 'touati12@gmail.com',
                'password' => Hash::make('B12345a'),
                'Adresse' => 'Rabat',
                'Tel' => '+212 7 10 67 12 09',
            ]
        ]);
    }
}
