<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'type_accessoire_jeux', 'description', 'categorie', 'prix', 'stock'];
    public function admin() {
        return $this->belongsTo(Admin::class);
    }
    public function avis() {
        return $this->hasMany(commentaire::class, 'id_produit');
    }
    public function panier() {
        return $this->belongsTo(Panier::class);
    }
}
