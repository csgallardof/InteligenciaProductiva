<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Role;

use App\Evento;
use App\Solucion;

class PaginasController extends Controller
{
    public function despliegueterritorial(){
    	return view('despliegueterritorial');
    }

    public function inicio(){
    	return view('inicio');
    }

    public function reportegeneralccpt(){
    	return view('reportes.reportegeneralccpt');
    }

    public function cifrasccpt(){
    	return view('publico.cifras');
    }

    public function vocaciones(){
    	return view('publico.vocaciones');
    }

    public function indices(){
        return view('publico.indice');
    }

    public function contratosinversion(){
        return view('publico.contratos-de-inversion');
    }

    
    // Modelo Usuarios
    public function usuarios(){

        $role = user::find(1)->roles;
       // return $role;

        $user = role::find(1)->users;
        
        dd($user);
        return $user;
        //return view('welcome');
    }

    // Modelo solucion - evento - usuario

    public function participantes(){

        $evento = User::find(1)->evento()->get(); 

       // $user = Evento::find(1)->users;

        dd($evento);

        //return View::make('welcome')->with('', $events);
    }

    public function indicadoresProvincia(){
        return view('publico.indicadoresProvincia');
    }

}
