<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CnCifrasNacionales;
use App\CnTipoCifraNacional; 

class CnCifrasNacionalesController extends Controller
{
    public function obtenerPibActividadEconomica($id, $anio){
    	//dd('hola');
        return CnCifrasNacionales::cnCifrasNacionalesPibActividadEconomica($id,$anio);
    }

    public function obtenerPibZona($id, $anio){
        //dd('hola');
        return CnCifrasNacionales::cnCifrasNacionalesPibZona($id, $anio);
    }

    public function graficaPibActividadEconomica(){

    	$tiposCifrasNacionalesPIBActividadEconomica= CnTipoCifraNacional::select('id','nombre_tipo_cifra_nacional')
    												->take(3)
    												->get();
        $tiposCifrasNacionalesPIBZonas= CnTipoCifraNacional::select('id','nombre_tipo_cifra_nacional')
                                                    ->take(4)
                                                    ->get();
    	//dd($tiposCifrasNacionalesPIBZonas);

    	return view('publico.cifras_nacionales.cifras_nacionales')->with(["tiposCifrasNacionalesPIBActividadEconomica"=>$tiposCifrasNacionalesPIBActividadEconomica,
                                                    "tiposCifrasNacionalesPIBZonas"=>$tiposCifrasNacionalesPIBZonas
                                                ]);
    }

    public function obtenerPibProvincia($id, $anio){
        //dd('hola');
        return CnCifrasNacionales::cnCifrasNacionalesPibProvincia($id, $anio);
    }
}
