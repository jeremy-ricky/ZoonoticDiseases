<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = ['Nom', 'Nom_locaux', 'Aspect', 'Couleur', 'Etat', 'Taille', 'Description', 'Picture'];
}
