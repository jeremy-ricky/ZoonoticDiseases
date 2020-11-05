<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prise extends Model
{
    protected $fillable = ['Poisson_id', 'Debarquement_id', 'Quantite', 'Etat'];
}
