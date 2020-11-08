<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Financement extends Model
{
    protected $fillable = ['Intitule', 'Montant', 'Description', 'Domaine_expertise', 'Piece_jointe1', 'Etat', 'Piece_jointe2', 'Piece_jointe3', 'Bailleur_id'];
}
