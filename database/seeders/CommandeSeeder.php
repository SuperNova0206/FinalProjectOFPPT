<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('commandes')->insert([
            [
                'date' => '2022-04-12',
                'etat' => 'en traitement',
                'panier_id' => 1,
                'client_id'=>1
            ],
            [
                'date' => '2024-04-13',
                'etat' => 'expédié',
                'panier_id' => 2,
                'client_id' =>2
            ],
        ]);
    }
}
