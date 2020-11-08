<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $fillable = ['Nom'];

    public static function NbreNom($Nbre){
    	$Nbre = Zone::whereNom($Nbre)->count('id');

    	if ($Nbre == 0) {
    		return false;
    	}else{
    		return true;
    	}
    }
}
