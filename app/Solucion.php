<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solucion extends Model
{
    //

    public function provincia(){

    	return $this->belongsTo('App\Provincia');
    }

    public function ambit(){

    	return $this->belongsTo('App\Ambit');
    }

    public function evento(){

    	return $this->belongsTo('App\Evento');
    }

    public function instrumento(){

    	return $this->belongsTo('App\Instrumento');
    }

    public function pajustada(){

    	return $this->belongsTo('App\Pajustada');
    }

    public function sector(){

    	return $this->belongsTo('App\Sector');
    }

    public function thematic(){

    	return $this->belongsTo('App\thematic');
    }

    public function vsector(){

    	return $this->belongsTo('App\Vsector');
    }

    public function sipoc(){

        return $this->belongsTo('App\Sipoc');
    }


    public function eventos() {
        return $this->belongsToMany('Evento', 'user_evento_solucion','solucion_id','evento_id');
    }


    public function usuarios() {
        return $this->belongsToMany('User', 'user_evento_solucion','solucion_id','user_id');
    }


}
