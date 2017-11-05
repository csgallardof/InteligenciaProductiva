<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
