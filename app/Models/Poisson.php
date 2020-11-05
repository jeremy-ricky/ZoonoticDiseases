<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poisson extends Model
{
    protected $fillable = ['Nom', 'Espece_id', 'Nom_locaux', 'Aspect', 'Couleur', 'Taille', 'Description', 'Picture', 'Etat'];
}
