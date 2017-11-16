<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Role;

use App\Evento;
use App\Solucion;


use App\Provincia;
use App\Sipoc;
use App\Sector;

class PaginasController extends Controller
{
     public function despliegueterritorial(){



         $provincias = Provincia::all(); 

         $sectors= Sector::all(); 

        //dd($provincias);

        return view('despliegueterritorial')->with(["provincias"=>$provincias,"sectors"=>$sectors]);

        //->with(["datos"=>$datos, "errores"=>$errores, "nombreArchivo"=>$nombreArchivo, "nombreEvento"=>$nombreEvento]);
    }


    public function detalledespliegue(Request $request, $solucion_id){

        $soluciones = Solucion::where('id','=',$solucion_id)->get();

        return view('detalle-despliegue')->with(["soluciones"=>$soluciones]);
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


    public function buscar(Request $request){

        //dd ($request->provincias);

        $solucion_proveedores = Solucion::where('sector_id','=',$request->sectores)
                            ->where('provincia_id','=',$request->provincias)
                            ->where('sipoc_id','=',1)->get();

        $solucion_insumo = Solucion::where('sector_id','=',$request->sectores)
                            ->where('provincia_id','=',$request->provincias)
                            ->where('sipoc_id','=',2)->get();

        $solucion_proceso = Solucion::where('sector_id','=',$request->sectores)
                            ->where('provincia_id','=',$request->provincias)
                            ->where('sipoc_id','=',3)->get();

        $solucion_producto = Solucion::where('sector_id','=',$request->sectores)
                            ->where('provincia_id','=',$request->provincias)
                            ->where('sipoc_id','=',4)
                            ->where('tipo_fuente','=',1)->get();

        $solucion_mercado = Solucion::where('sector_id','=',$request->sectores)
                            ->where('provincia_id','=',$request->provincias)
                            ->where('sipoc_id','=',5)
                            ->where('tipo_fuente','=',1)->get();


        $provincias = Provincia::all(); 

         $sectors= Sector::all();

    
       
        return view('despliegueterritorial')->with(["solucion_proveedores"=>$solucion_proveedores,
                                                    "solucion_insumo"=>$solucion_insumo,
                                                    "solucion_proceso"=>$solucion_proceso,
                                                    "solucion_producto"=>$solucion_producto,
                                                    "solucion_mercado"=>$solucion_mercado,
                                                    "provincias"=>$provincias,
                                                    "sectors"=>$sectors

                                                ]);



    }

    public function invertir_en_el_ecuador(){
      return view('publico.invertir_en_el_ecuador');
    }

    public function indicadoresProvincia(){
        return view('publico.indicadoresProvincia');
    }

}
