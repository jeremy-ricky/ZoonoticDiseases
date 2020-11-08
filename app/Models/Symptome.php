<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Symptome extends Model
{
    protected $fillable = ['Symptome', 'Daparition', 'Animal_id', 'Maladie_id', 'Probabilite', 'Etat'];
}
