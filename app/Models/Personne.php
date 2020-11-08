<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    protected $fillable = ['Nom', 'Zone_id', 'Telephone', 'Email', 'Etat'];

    public static function UniqueEmail($Email){
    	$Nbre = Personne::whereEmail($Email)->count('id');

    	if ($Nbre==0) {
    		return false;
    	}else{
    		return true;
    	}
    } 

    public static function UniqueTelephone($Telephone){
    	$Nbre = Personne::whereTelephone($Telephone)->count('id');

    	if ($Nbre==0) {
    		return false;
    	}else{
    		return true;
    	}
    } 
}
