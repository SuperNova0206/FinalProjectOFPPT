<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produits')->insert([
            [
                'nom' => 'Clavier Lenovo',
                'type_accessoire_jeux' => 'Clavier',
                'description' => 'Clavier ergonomique pour une expérience de frappe améliorée',
                'categorie' => 'Accessoires de jeux',
                'prix' => 49.99,
                'stock' => 100,
            ],
            [
                'nom' => 'Souris Lenovo',
                'type_accessoire_jeux' => 'Souris',
                'description' => 'Souris sans fil avec capteur haute précision',
                'categorie' => 'Accessoires de jeux',
                'prix' => 29.99,
                'stock' => 150,
            ],
            [
                'nom' => 'PC Lenovo Gaming',
                'type_accessoire_jeux' => 'PC',
                'description' => 'PC de gaming puissant avec processeur haute performance',
                'categorie' => 'Ordinateurs',
                'prix' => 999.99,
                'stock' => 50,
            ]
        ]);
    }
}
