<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambit extends Model
{
    //

	protected $table = 'ambits';

    public function solucion(){

    	return $this->hasMany('App\Solucion');
    }
}
