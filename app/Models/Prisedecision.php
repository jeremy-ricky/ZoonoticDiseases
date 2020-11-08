<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prisedecision extends Model
{
    protected $fillable = ['Symptome_id', 'Maladie_id', 'Probabilite', 'Etat'];
}
