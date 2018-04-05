<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\CspTipoAgenda;
use App\CspTipoImpactoAgenda;
use App\Provincia;
use App\Canton;

class CspAgendaTerritorialController extends Controller
{
    public function vistaCrearAgenda(){
    	$usuario_institucion_id = Auth::user()->institucion_id;
    	$cspTipoAgenda = CspTipoAgenda::all();
    	$cspTipoImpactoAgenda = CspTipoImpactoAgenda::all();
    	$provincias = Provincia::all();
    	//dd($cspTipoAgenda);
    	return view('csp.cspAgendaTerritorial.createAgendaTerritorialCsp')->with(["usuario_institucion_id"=>$usuario_institucion_id,
    		"cspTipoImpactoAgenda"=>$cspTipoImpactoAgenda,
    		"provincias"=>$provincias,
    		"cspTipoAgenda"=>$cspTipoAgenda]);
    }
    public function obtenerCantones(Request $request, $id){
    	
        return Canton::cantones($id);
    }

    public function crearAgenda(Request $request){
    	$responsable = $request['responsable'];
    	$fecha = $request['fecha_agenda'];
    	$hora = $request['hora_agenda'];
    	$hora_agenda=date("H:i", strtotime($hora));
        $fecha_hora_agenda=$fecha." ".$hora_agenda;
        $institucion_id = $request['institucion_id'];
        $tipo_agenda_id = $request['tipo_agenda_id'];
        $descripcion_tipo_agenda = $request['descripcion_tipo_agenda'];
        $tipo_impacto_id = $request['tipo_impacto_id'];
        $descripcion_tipo_impacto = $request['descripcion_tipo_impacto'];
        
        dd($responsable,$fecha_hora_agenda,$institucion_id,$tipo_agenda_id,$descripcion_tipo_agenda,$tipo_impacto_id,$descripcion_tipo_impacto);


    }
}
