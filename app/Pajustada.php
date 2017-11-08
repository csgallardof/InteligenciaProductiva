<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pajustada extends Model
{
    //

	protected $table = 'pajustadas';


    public function solucion(){

    	return $this->hasMany('App\Solucion');
    }
}
