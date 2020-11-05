<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    protected $fillable = ['Pecheur_id', 'Association_id', 'DateD', 'DateF', 'Etat'];
}
