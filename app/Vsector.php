<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vsector extends Model
{
<<<<<<< HEAD
    protected $table = "vsectors";

    protected $fillable =[
    	'id','nombre_vsector',
    ];
    
=======
    //

	protected $table = 'vsectors';


    public function solucion(){

    	return $this->hasMany('App\Solucion');
    }
>>>>>>> f7b50640e563085ef333cc571a83d609898e0b95
}
