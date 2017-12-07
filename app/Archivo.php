<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
     
    protected $table = 'archivos';

    /*
    public function usuario()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function solucion()
    {
        return $this->belongsTo('App\Solucion','solucion_id');
    }

    public function pajustada()
    {
        return $this->belongsTo('App\Pajustada','solucion_id');
    }
    */

}
