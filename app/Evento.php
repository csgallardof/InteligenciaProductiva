<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //
	protected $table = 'eventos';


    public function solucion(){

    	return $this->hasMany('App\Solucion');
    }
}
