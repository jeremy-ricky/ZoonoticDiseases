<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bailleur extends Model
{
    protected $fillable = ['Nom', 'Zone_id', 'Telephone', 'Email', 'Etat'];

    public static function UniqueEmail($Email){
    	$Nbre = Bailleur::whereEmail($Email)->count('id');

    	if ($Nbre==0) {
    		return false;
    	}else{
    		return true;
    	}
    } 

    public static function UniqueTelephone($Telephone){
    	$Nbre = Bailleur::whereTelephone($Telephone)->count('id');

    	if ($Nbre==0) {
    		return false;
    	}else{
    		return true;
    	}
    } 
}
