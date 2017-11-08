<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    //

	protected $table = 'sectors';
   
   public function solucion(){

    	return $this->hasMany('App\Solucion');
    }
}
