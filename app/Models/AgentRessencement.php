<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgentRessencement extends Model
{
    protected $fillable = ['Nom', 'Sexe', 'Telephone', 'Email', 'Etat'];

    public static function UniqueEmail($Email){
    	$Nbre = AgentRessencement::whereEmail($Email)->count('id');

    	if ($Nbre==0) {
    		return false;
    	}else{
    		return true;
    	}
    }

    public static function UniqueTelephone($Telephone){
    	$Nbre = AgentRessencement::whereTelephone($Telephone)->count('id');

    	if ($Nbre==0) {
    		return false;
    	}else{
    		return true;
    	}
    }
}
