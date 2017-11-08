<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
<<<<<<< HEAD
    protected $table = "provincias";

    protected $fillable =[
    	'id','nombre_provincia',
    ];
=======
    //

    protected $table = 'provincias';

    public function solucion(){

    	return $this->hasMany('App\Solucion');
    }


>>>>>>> f7b50640e563085ef333cc571a83d609898e0b95
}
