<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActorSolucion extends Model
{
    //
    protected $table = 'actor_solucion';

    public function usuario(){

    	return $this->hasMany('App\Usuario');
    }

    public function solucion(){

    	return $this->hasMany('App\Solucion');
    }
}
