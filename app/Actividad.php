<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    //
    protected $table = 'actividades';

    public function usuario()
    {
        return $this->belongsTo('App\User','ejecutor_id');
    }

    public function archivo()
    {
    	return $this->hasMany('App\Archivo', 'actividad_id', 'id');
    }

}