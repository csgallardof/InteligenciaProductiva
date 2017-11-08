<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vsector extends Model
{
    protected $table = "vsectors";

    protected $fillable =[
    	'id','nombre_vsector',
    ];
    
}
