<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = ['Zone_id', 'Patrouille_id', 'Erreur', 'Etat'];
}
