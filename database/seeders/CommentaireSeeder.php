<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('commentaires')->insert([
            [
                'client_id' => 2,
                'produit_id' => 1,
                'note' => 4,
                'commenter' => "je suis extrêmement satisfait de l'ensemble clavier et souris. Le clavier est confortable à utiliser, même pendant de longues périodes, et les touches sont réactives et bien espacées. La souris tient parfaitement dans ma main et les boutons programmables supplémentaires se sont révélés très utiles pour mon travail.",
                'date' => '2022-04-11',
            ],
            [
                'client_id' => 3,
                'produit_id' => 2,
                'note' => 3,
                'commenter' => "Le PC Lenovo est un outil fiable et performant, doté d'un écran haute résolution, d'une construction robuste et d'un design élégant. Il offre une excellente expérience utilisateur grâce à son clavier confortable, son trackpad précis, et ses capacités multitâches efficaces. Ses caractéristiques remarquables, comme son autonomie impressionnante et son grand espace de stockage, le rendent particulièrement recommandable pour les professionnels.",
                'date' => '2024-04-11',
            ]
        ]);
    }
}
