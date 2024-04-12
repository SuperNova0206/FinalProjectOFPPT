<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'email', 'motDePasse', 'adresse', 'Tel', 'photo'];
    public function admin() {
        return $this->belongsTo(Admin::class);
    }
    public function avis() {
        return $this->hasMany(commentaire::class);
    }
    }
