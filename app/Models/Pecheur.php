<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pecheur extends Model
{
    protected $fillable = ['Nom', 'Adresse', 'Telephone', 'Email', 'Sexe', 'Date_naissance', 'Etat'];
}
