<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vsector extends Model
{
    //

	protected $table = 'vsectors';


    public function solucion(){

    	return $this->hasMany('App\Solucion');
    }
}
