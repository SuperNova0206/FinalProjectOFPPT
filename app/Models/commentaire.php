<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commentaire extends Model
{
    use HasFactory;
    protected $fillable = ['id_client', 'id_produit', 'note', 'commentaire', 'date'];

    public function client() {
        return $this->belongsTo(Client::class, 'id_client');
    }

    public function produit() {
        return $this->belongsTo(Produit::class, 'id_produit');
    }

    public function admin() {
        return $this->belongsTo(Admin::class);
    }
}
