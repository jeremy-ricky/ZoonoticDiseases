<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Navire extends Model
{
    protected $fillable = ['Embarquement_id', 'Outil_id', 'Pecheur_id', 'Zone_id', 'Quantite', 'Etat'];
}
