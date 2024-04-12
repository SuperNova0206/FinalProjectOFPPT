<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'etat', 'panier_id', 'client_id'];

    public function client() {
        return $this->belongsTo(Client::class, 'client_id');
    }
    public function admin() {
        return $this->belongsTo(Admin::class);
    }
    public function panier() {
        return $this->hasOne(Panier::class);
    }
}
