<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgentRessencement extends Model
{
    protected $fillable = ['Nom', 'Sexe', 'Telephone', 'Email', 'Etat'];
}
