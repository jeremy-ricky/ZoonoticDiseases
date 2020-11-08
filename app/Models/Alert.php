<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    protected $fillable = ['Message', 'TypeEnvoie', 'Jour', 'Frequence', 'Etat'];
}
