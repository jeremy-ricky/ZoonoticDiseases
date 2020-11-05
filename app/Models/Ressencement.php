<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ressencement extends Model
{
    protected $fillable = ['Poisson_id', 'Agent_id', 'Campagne_id', 'Quantite', 'Date_ressencement', 'Quota', 'Etat'];
}
