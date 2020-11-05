<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Espece extends Model
{
    protected $fillable = ['Caracteristique_distinctifs', 'Taille', 'Habitat', 'Nutrition', 'Comportement', 'Notes', 'Nom', 'Picture', 'Etat'];
}
