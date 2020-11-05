<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Embarquement extends Model
{
    protected $fillable=['Campagne_id', 'Date_embarquement', 'Heure_embarquement', 'Port_id', 'Etat'];
}
