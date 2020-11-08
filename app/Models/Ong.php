<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ong extends Model
{
    protected $fillable = ['Nom', 'Adresse', 'Telephone', 'Email', 'Etat', 'Domaine_expertise'];
}
