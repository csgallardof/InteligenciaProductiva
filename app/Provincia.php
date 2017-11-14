<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{


    protected $table = 'provincias';

    public function solucion(){

    	return $this->hasMany('App\Solucion');
    }


    public function evento(){
    	return $this->hasMany('App\Evento');
    }



}
