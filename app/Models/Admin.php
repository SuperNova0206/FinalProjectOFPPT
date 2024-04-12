<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'email', 'motDePasse'];
    public function clients() {
        return $this->hasMany(Client::class);
    }

    public function produits() {
        return $this->hasMany(Produit::class);
    }

    public function commandes() {
        return $this->hasMany(Commande::class);
    }

    public function avis() {
        return $this->hasMany(commentaire::class);
    }




    public function gererReclamations() {
        // Logique pour gérer les réclamations
    }

    public function gererClients() {
        // Logique pour gérer les clients
    }

    public function gererStocks() {
        // Logique pour gérer les stocks
    }

    public function gererLivraisons() {
        // Logique pour gérer les livraisons
    }

    public function gererRetours() {
        // Logique pour gérer les retours
    }

    public function gererCommandes() {
        // Logique pour gérer les commandes
    }
}
