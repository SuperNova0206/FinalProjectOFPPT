<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PanierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('paniers')->insert([
            [
                'produit_id' => 1, 
                'quantite' => 2,
                'prix_total' => Produit::find(1)->prix * 2
            ],
            [
                'produit_id' => 2,
                'quantite' => 1,
                'prix_total' => Produit::find(2)->prix * 1 
            ],
        ]);
    }
}
