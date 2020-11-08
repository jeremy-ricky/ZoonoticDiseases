<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['Intitule', 'Montant', 'Description', 'Piece_jointe1', 'Piece_jointe2', 'Piece_jointe3', 'Etat'];
}
