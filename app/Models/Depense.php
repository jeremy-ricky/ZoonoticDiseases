<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
    protected $fillable = ['Description', 'DateExpense', 'Montant', 'Project_id', 'Etat', 'Financement_id'];
}
