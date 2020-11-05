<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Debarquement extends Model
{
    protected $fillable = ['Embarquement_id', 'Date_debarquement', 'Heure_debarquement', 'Port_id', 'Etat'];
}
