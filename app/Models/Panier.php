<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    use HasFactory;
    protected $fillable = ['produit_id', 'quantite', 'prixTotal'];

    public function produits() {
        return $this->belongsToMany(Produit::class, 'produit_id');
    }
    public function commande() {
        return $this->belongsTo(Commande::class);
    }
}
