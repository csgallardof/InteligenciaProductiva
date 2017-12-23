<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Role;

use App\Evento;
use App\Solucion;
use App\Pajustada;
use App\ActorSolucion;
use App\Actividad;
use App\Ambit;
use DB;


use App\Provincia;
use App\Sipoc;
use App\Sector;

use App\Auth\Login;

class PaginasController extends Controller
{
     public function despliegueterritorial(){


        $provincias = Provincia::all(); 

        $sectors= Sector::all(); 

        //dd($provincias);

        return view('despliegueterritorial')->with(["provincias"=>$provincias,"sectors"=>$sectors]);

        //->with(["datos"=>$datos, "errores"=>$errores, "nombreArchivo"=>$nombreArchivo, "nombreEvento"=>$nombreEvento]);
    }


    public function detalledespliegue(Request $request, $idSolucion){

        $solucion = Solucion::where('id','=',$idSolucion)->first();
        
        $actoresSoluciones = ActorSolucion::where('solucion_id','=',$idSolucion)
                                            ->where('tipo_fuente','=',1)
                                            ->orderBy('tipo_actor','ASC')->get();

        $actividades = Actividad::where('solucion_id','=',$idSolucion)
                                            ->where('tipo_fuente','=',1)
                                            ->orderBy('created_at','DESC')->get();
        
        return view('detalle-despliegue')->with([
                                            "solucion"=>$solucion,
                                            "actoresSoluciones"=>$actoresSoluciones,
                                            "actividades"=>$actividades
                                        ]);
    }

    public function detalleccpt(Request $request, $pajustada_sol_id, $sector, $ambito, $sipoc){

        $pajustada = Pajustada::find($pajustada_sol_id);
        
       

        if($sector > 0 && $ambito > 0){
             $soluciones = Solucion::where('pajustada_id','=',$pajustada_sol_id)
                        ->where('tipo_fuente','=',2)
                        ->where('sipoc_id','=',$sipoc)
                        ->where('sector_id','=',$sector)
                        ->where('ambit_id','=',$ambito)
                        ->orderBy('solucion_ccpt','ASC')->get();
        }
        if($sector > 0 && $ambito == 0){
            $soluciones = Solucion::where('pajustada_id','=',$pajustada_sol_id)
                        ->where('tipo_fuente','=',2)
                        ->where('sipoc_id','=',$sipoc)
                        ->where('sector_id','=',$sector)
                        ->orderBy('solucion_ccpt','ASC')->get();
        }
      

        if($sector == 0 && $ambito > 0){
            $soluciones = Solucion::where('pajustada_id','=',$pajustada_sol_id)
                        ->where('tipo_fuente','=',2)
                        ->where('sipoc_id','=',$sipoc)
                        ->where('ambit_id','=',$ambito)
                        ->orderBy('solucion_ccpt','ASC')->get();
        }

        $actoresSoluciones = ActorSolucion::where('solucion_id','=',$pajustada_sol_id)
                                            ->where('tipo_fuente','=',2)
                                            ->orderBy('tipo_actor','ASC')->get();

        $actividades = Actividad::where('solucion_id','=',$pajustada_sol_id)
                                            ->where('tipo_fuente','=',2)
                                            ->orderBy('created_at','DESC')->get();




        $sector = Sector::find($sector);
        $ambito = Ambit::find($ambito);
        $sipoc = Sipoc::find($sipoc);

        return view('detalle-ccpt')->with(["soluciones"=>$soluciones,
                                            "pajustada"=>$pajustada,
                                            "sector"=>$sector,
                                            "ambito"=>$ambito,
                                            "sipoc"=>$sipoc,
                                            "actoresSoluciones"=>$actoresSoluciones,
                                            "actividades"=>$actividades
                                        ]);
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
        $provincias = Provincia::all();
    	return view('publico.vocaciones')->with(["provincias"=>$provincias]);
    }

    public function indices(){
        return view('publico.indice');
    }

    public function contratosinversion(){
        return view('publico.contratos-de-inversion');
    }

    
    // Modelo Usuarios
    public function usuarios(){

       
       // $usuario_actual= Auth::user()->get();
       $role = user::find(44)->roles;
       // return $role;
       $user = role::find(2)->users;
        
        dd($role);
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

    public function UsuariosEvento(){

        $usuario_actual = User::find(1)->evento()->get(); 

       // $user = Evento::find(1)->users;

        dd($usuario_actual);

        //return View::make('welcome')->with('', $events);
    }


    public function buscar(Request $request){

        $provincias = Provincia::all(); 

        $sectors= Sector::all();

        $paramSector = Sector::find($request-> sectores);

        $paramProvincia = Provincia::find($request-> provincias);

        if($request->sectores > 0 || $request->provincias > 0){

            if($request->sectores > 0 && $request->provincias > 0){
                $solucion_proveedores = Solucion::where('sipoc_id','=',1)
                                    ->where('tipo_fuente','=',1)
                                    ->where('sector_id','=',$request->sectores)
                                    ->where('provincia_id','=',$request->provincias)->get();

                $solucion_insumo = Solucion::where('sipoc_id','=',2)
                                    ->where('tipo_fuente','=',1)
                                    ->where('sector_id','=',$request->sectores)
                                    ->where('provincia_id','=',$request->provincias)->get();

                $solucion_proceso = Solucion::where('sipoc_id','=',3)
                                    ->where('tipo_fuente','=',1)
                                    ->where('sector_id','=',$request->sectores)
                                    ->where('provincia_id','=',$request->provincias)->get();

                $solucion_producto = Solucion::where('sipoc_id','=',4)
                                    ->where('tipo_fuente','=',1)
                                    ->where('sector_id','=',$request->sectores)
                                    ->where('provincia_id','=',$request->provincias)->get();

                $solucion_mercado = Solucion::where('sipoc_id','=',5)
                                    ->where('tipo_fuente','=',1)
                                    ->where('sector_id','=',$request->sectores)
                                    ->where('provincia_id','=',$request->provincias)->get();
            }else{
                if($request->sectores > 0){
                    $solucion_proveedores = Solucion::where('sipoc_id','=',1)
                                    ->where('tipo_fuente','=',1)
                                    ->where('sector_id','=',$request->sectores)->get();

                    $solucion_insumo = Solucion::where('sipoc_id','=',2)
                                        ->where('tipo_fuente','=',1)
                                        ->where('sector_id','=',$request->sectores)->get();

                    $solucion_proceso = Solucion::where('sipoc_id','=',3)
                                        ->where('tipo_fuente','=',1)
                                        ->where('sector_id','=',$request->sectores)->get();

                    $solucion_producto = Solucion::where('sipoc_id','=',4)
                                        ->where('tipo_fuente','=',1)
                                        ->where('sector_id','=',$request->sectores)->get();

                    $solucion_mercado = Solucion::where('sipoc_id','=',5)
                                        ->where('tipo_fuente','=',1)
                                        ->where('sector_id','=',$request->sectores)->get();
                }else{

                    if ($request->provincias > 0){
                        $solucion_proveedores = Solucion::where('sipoc_id','=',1)
                                    ->where('tipo_fuente','=',1)
                                    ->where('provincia_id','=',$request->provincias)->get();

                        $solucion_insumo = Solucion::where('sipoc_id','=',2)
                                            ->where('tipo_fuente','=',1)
                                            ->where('provincia_id','=',$request->provincias)->get();

                        $solucion_proceso = Solucion::where('sipoc_id','=',3)
                                            ->where('tipo_fuente','=',1)
                                            ->where('provincia_id','=',$request->provincias)->get();

                        $solucion_producto = Solucion::where('sipoc_id','=',4)
                                            ->where('tipo_fuente','=',1)
                                            ->where('provincia_id','=',$request->provincias)->get();

                        $solucion_mercado = Solucion::where('sipoc_id','=',5)
                                            ->where('tipo_fuente','=',1)
                                            ->where('provincia_id','=',$request->provincias)->get();
                    }
                } 
            }

            return view('despliegueterritorial')->with(["solucion_proveedores"=>$solucion_proveedores,
                                                    "solucion_insumo"=>$solucion_insumo,
                                                    "solucion_proceso"=>$solucion_proceso,
                                                    "solucion_producto"=>$solucion_producto,
                                                    "solucion_mercado"=>$solucion_mercado,
                                                    "provincias"=>$provincias,
                                                    "sectors"=>$sectors,
                                                    "paramSector"=>$paramSector,
                                                    "paramProvincia"=>$paramProvincia

                                                ]);
        }else{
            return view('despliegueterritorial')->with([
                                                    "provincias"=>$provincias,
                                                    "sectors"=>$sectors,
                                                    "paramSector"=>$paramSector,
                                                    "paramProvincia"=>$paramProvincia
                                                ]);
        }
               

    }

    public function invertir_en_el_ecuador(){
      return view('publico.invertir_en_el_ecuador');
    }

    public function indicadoresProvincia(){
        return view('publico.indicadoresProvincia');
    }

    public function busquedaGeneral(Request $request){
        
        $buscar = $request-> parametro;

        if($buscar =='Mesas Competitivas' || $buscar =='Consejo Consultivo' ){
            if($buscar =='Mesas Competitivas'){
                $resultados = DB::table('solucions')
                                ->select('solucions.*', 'sectors.nombre_sector')
                                ->join('sectors', 'solucions.sector_id', '=', 'sectors.id')
                                /*->join('actor_solucion', 'actor_solucion.solucion_id', '=', 'solucions.id')*/
                                ->where('solucions.tipo_fuente','=',1)->get();
                                ;
            }
            if($buscar =='Consejo Consultivo'){
                $resultados = DB::table('solucions')
                                ->select('solucions.*', 'sectors.nombre_sector')
                                ->join('sectors', 'solucions.sector_id', '=', 'sectors.id')
                                /*->join('actor_solucion', 'actor_solucion.solucion_id', '=', 'solucions.id')*/
                                ->where('solucions.tipo_fuente','=',2)->get();
            }

        }else{


            $resultados1 = Solucion::select('solucions.*')
                            ->join('provincias', 'solucions.provincia_id', '=', 'provincias.id')
                            ->where('provincias.nombre_provincia','LIKE','%' . $buscar . '%')
                            ;
            
            $resultados2 = Solucion::select('solucions.*')
                            ->join('actor_solucion', 'solucions.id', '=', 'actor_solucion.solucion_id')
                            ->join('users','actor_solucion.user_id','=','users.id')
                            ->where('users.name','LIKE','%' . $buscar . '%')
                            ;//SOLO QUERY
            
            
            $resultados = Solucion::orwhere('solucions.verbo_solucion','LIKE','%' . $buscar . '%')
                            ->orwhere('solucions.sujeto_solucion','LIKE','%' . $buscar . '%')
                            ->orwhere('solucions.complemento_solucion','LIKE','%' . $buscar .'%')
                            ->orwhere('solucions.solucion_ccpt','LIKE','%' . $buscar . '%')
                            ->union($resultados1) // UNION CON  EL QUERY ANTERIOR
                            ->union($resultados2) // UNION CON  EL QUERY ANTERIOR
                            ->get();

            
        }

        
/*        $actoresSoluciones = $resultados[5]->actor_solucion;
        dd($actoresSoluciones[0]->usuario->name);
*/        
        
        return view('publico.reportes.reporte1')->with([
                                                    "parametro"=>$buscar,
                                                    "resultados"=>$resultados
                                                ]);

    }

}
