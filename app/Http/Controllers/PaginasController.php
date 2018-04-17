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
use App\EstadoSolucion;
use DB;
use Illuminate\Support\Collection as Collection;

use App\Provincia;
use App\Sipoc;
use App\Sector;

use App\Auth\Login;

class PaginasController extends Controller
{
     public function busquedaAvanzada(Request $request){

        $buscar = $request-> parametro;

        if($buscar == 'Mesas de Competitividad' || $buscar == 'Consejo_Consultivo'){

            if($buscar == 'Mesas de Competitividad' ){
                $resultados = Solucion::where('tipo_fuente','=',1)
                            ->orderBy('estado_id','ASC')
                            ->get();
            }
            if($buscar == 'Consejo Consultivo' ){
                $resultados = Solucion::where('sector_id','=',2)
                            ->orderBy('estado_id','DESC')
                            ->get();
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

            $resultados3 = Solucion::select('solucions.*')
                                ->join('sectors', 'solucions.sector_id', '=', 'sectors.id')
                                ->where('sectors.nombre_sector','LIKE','%' . $buscar . '%')
                                ;//SOLO QUERY

            $resultados5 = Solucion::select('solucions.*')
                                ->join('estado_solucion', 'solucions.estado_id', '=', 'estado_solucion.id')
                                ->where('estado_solucion.nombre_estado','LIKE','%' . $buscar . '%')
                                ;//SOLO QUERY
            $resultados6 = Solucion::select('solucions.*')
                                ->join('ambits', 'solucions.ambit_id', '=', 'ambits.id')
                                ->where('ambits.nombre_ambit','LIKE','%' . $buscar . '%')
                                ;//SOLO QUERY

            $resultados = Solucion::orwhere('solucions.verbo_solucion','LIKE','%' . $buscar . '%')
                                ->orwhere('solucions.sujeto_solucion','LIKE','%' . $buscar . '%')
                                ->orwhere('solucions.complemento_solucion','LIKE','%' . $buscar .'%')
                                ->orwhere('solucions.solucion_ccpt','LIKE','%' . $buscar . '%')
                                ->orwhere('solucions.responsable_solucion','LIKE','%' . $buscar . '%')
                                ->orwhere( DB::raw('CONCAT( TRIM(solucions.verbo_solucion)," ",TRIM(solucions.sujeto_solucion)," ",TRIM(solucions.complemento_solucion))','concatenado'),'LIKE','%' . $buscar . '%')
                                ->union($resultados1) // UNION CON  EL QUERY1 ANTERIOR
                                ->union($resultados2) // UNION CON  EL QUERY2 ANTERIOR
                                ->union($resultados3) // UNION CON  EL QUERY3 ANTERIOR
                                //->union($resultados4) // UNION CON  EL QUERY4 ANTERIOR
                                ->union($resultados5) // UNION CON  EL QUERY5 ANTERIOR 
                                ->union($resultados6) // UNION CON  EL QUERY5
                               ->get();
            
                    //dd($totalMesasCom,$totalCCTP,$totalPropuesta);

            
        }


        $resultadoAuxiliar[] = array();
        $filtros[] = array();
        $hayFiltros= false;

        if( isset($request->checkbox1)){
            $filtros["mesas"]= true;
            foreach ($resultados as $solucion) {
                if($solucion-> tipo_fuente == 1){
                    array_push($resultadoAuxiliar, $solucion);
                    $hayFiltros = true;
                }
            }
        }

        if( isset($request->checkbox2)){
            $filtros["consejo"]= true;
            foreach ($resultados as $solucion) {
                if($solucion-> tipo_fuente == 2){
                    array_push($resultadoAuxiliar, $solucion);
                    $hayFiltros = true;
                }
            }
        }

        if( isset($request->sectorSelect) && $request->sectorSelect > 0 ){
            $filtros["sector"]= $request->sectorSelect;
            foreach ($resultados as $solucion) {
                if($solucion->sector_id == $request->sectorSelect){
                    array_push($resultadoAuxiliar, $solucion);
                    $hayFiltros = true;
                }
            }
        }
        if( isset($request->estadoSelect) && $request->estadoSelect > 0 ){
            $filtros["sector"]= $request->estadoSelect;
            foreach ($resultados as $solucion) {
                if($solucion->estado_id == $request->estadoSelect){
                    array_push($resultadoAuxiliar, $solucion);
                    $hayFiltros = true;
                }
            }
        }

        if( isset($request->ambitoSelect) && $request->ambitoSelect > 0 ){
            $filtros["ambito"]= $request->ambitoSelect;
            foreach ($resultados as $solucion) {
                if($solucion->ambit_id == $request->ambitoSelect){
                    array_push($resultadoAuxiliar, $solucion);
                    $hayFiltros = true;
                }
            }
        }
        if( isset($request->responsableSelect) && $request->responsableSelect > 0 ){
            $filtros["responsable"]= $request->responsableSelect;
            foreach ($resultados as $solucion) {
                foreach ($solucion->actor_solucion as $actor_solucion) {
                    if($actor_solucion-> user_id == $request->responsableSelect && $actor_solucion->tipo_actor == 1){
                        array_push($resultadoAuxiliar, $solucion);
                        $hayFiltros = true;
                    }
                }
            }
        }

        if( isset($request->corresponsableSelect) && $request->corresponsableSelect > 0 ){
            $filtros["corresponsable"]= $request->corresponsableSelect;
            foreach ($resultados as $solucion) {
                foreach ($solucion->actor_solucion as $actor_solucion) {
                    if($actor_solucion-> user_id == $request->corresponsableSelect && $actor_solucion->tipo_actor == 2){
                        array_push($resultadoAuxiliar, $solucion);
                        $hayFiltros = true;
                    }
                }
            }
        }

        if( $hayFiltros == true){
            unset($resultadoAuxiliar[0]);
            $resultadoAuxiliar = array_unique($resultadoAuxiliar);
            $resultadoAuxiliar = Collection::make($resultadoAuxiliar);

            $resultados = $resultadoAuxiliar;
        }

        unset($filtros[0]);
            
        return view('publico.reportes.reporte2')->with([
                                            "parametro"=>$buscar,
                                            "resultados"=>$resultados,
                                            "filtros"=>$filtros
                                        ]);


        

    }
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

    public function zedes(){
        return view('publico.zedes');
    }
    public function asociacionesPublicoPrivada(){
        return view('publico.asociaciones-publico-privadas');
    }

    public function foroproduccion(){
        return view('publico.foro-de-la-produccion');
    }


    public function estructuraCostosGastos(){
        return view('publico.estructura-promedio-costos-gastos-empresas');
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

        if($buscar == 'Mesas_Competitividad' || $buscar == 'Consejo_consultivo'){

            if($buscar == 'Mesas_Competitividad' ){
                $resultados = Solucion::where('tipo_fuente','=',1)
                            ->orderBy('estado_id','ASC')
                            ->get();
            }
            if($buscar == 'Consejo_consultivo' ){
                //dd($buscar);
                 $resultados = Solucion::where('tipo_fuente','=',2)
                             ->orderBy('id','ASC')
                             ->get();
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

            $resultados3 = Solucion::select('solucions.*')
                                ->join('sectors', 'solucions.sector_id', '=', 'sectors.id')
                                ->where('sectors.nombre_sector','LIKE','%' . $buscar . '%')
                                ->orderBy('estado_id','ASC');
                                ;//SOLO QUERY

            $resultados4 = Solucion::select('solucions.*')
                                ->join('pajustadas', 'solucions.pajustada_id', '=', 'pajustadas.id')
                                ->where('pajustadas.nombre_pajustada','LIKE','%' . $buscar . '%')
                                ;//SOLO QUERY

            $resultados5 = Solucion::select('solucions.*')
                                ->join('estado_solucion', 'solucions.estado_id', '=', 'estado_solucion.id')
                                ->where('estado_solucion.nombre_estado','LIKE','%' . $buscar . '%')
                                ->orderBy('estado_id','DESC')
                                ;//SOLO QUERY

            $resultados6 = Solucion::select('solucions.*')
                                ->join('ambits', 'solucions.ambit_id', '=', 'ambits.id')
                                ->where('ambits.nombre_ambit','LIKE','%' . $buscar . '%')
                                ->orderBy('ambit_id','DESC')
                                ;//SOLO QUERY

            $resultados = Solucion::orwhere('solucions.verbo_solucion','LIKE','%' . $buscar . '%')
                                ->orwhere('solucions.sujeto_solucion','LIKE','%' . $buscar . '%')
                                ->orwhere('solucions.complemento_solucion','LIKE','%' . $buscar .'%')
                                ->orwhere('solucions.solucion_ccpt','LIKE','%' . $buscar . '%')
                                ->orwhere( DB::raw('CONCAT( TRIM(solucions.verbo_solucion)," ",TRIM(solucions.sujeto_solucion)," ",TRIM(solucions.complemento_solucion))','concatenado'),'LIKE','%' . $buscar . '%')
                                ->union($resultados1) // UNION CON  EL QUERY1 ANTERIOR
                                ->union($resultados2) // UNION CON  EL QUERY2 ANTERIOR
                                ->union($resultados3) // UNION CON  EL QUERY3 ANTERIOR
                                ->union($resultados4) // UNION CON  EL QUERY4 ANTERIOR
                                ->union($resultados5) // UNION CON  EL QUERY5 ANTERIOR
                                ->union($resultados5) // UNION CON  EL QUERY6 ANTERIOR
                                ->get();
        }


        $resultadoAuxiliar[] = array();
        $filtros[] = array();
        $hayFiltros= false;

        if( isset($request->checkbox1)){
            $filtros["mesas"]= true;
            foreach ($resultados as $solucion) {
                if($solucion-> tipo_fuente == 1){
                    array_push($resultadoAuxiliar, $solucion);
                    $hayFiltros = true;
                }
            }
        }

        if( isset($request->checkbox2)){
            $filtros["consejo"]= true;
            foreach ($resultados as $solucion) {
                if($solucion-> tipo_fuente == 2){
                    array_push($resultadoAuxiliar, $solucion);
                    $hayFiltros = true;
                }
            }
        }

        if( isset($request->sectorSelect) && $request->sectorSelect > 0 ){
            $filtros["sector"]= $request->sectorSelect;
            foreach ($resultados as $solucion) {
                if($solucion->sector_id == $request->sectorSelect){
                    array_push($resultadoAuxiliar, $solucion);
                    $hayFiltros = true;
                }
            }
        }

        if( isset($request->sectorSelect) && $request->sectorSelect > 0 ){
            $filtros["ambit"]= $request->sectorSelect;
            foreach ($resultados as $solucion) {
                if($solucion->sector_id == $request->sectorSelect){
                    array_push($resultadoAuxiliar, $solucion);
                    $hayFiltros = true;
                }
            }
        }

        if( isset($request->responsableSelect) && $request->responsableSelect > 0 ){
            $filtros["responsable"]= $request->responsableSelect;
            foreach ($resultados as $solucion) {
                foreach ($solucion->actor_solucion as $actor_solucion) {
                    if($actor_solucion-> user_id == $request->responsableSelect && $actor_solucion->tipo_actor == 1){
                        array_push($resultadoAuxiliar, $solucion);
                        $hayFiltros = true;
                    }
                }
            }
        }

        if( isset($request->corresponsableSelect) && $request->corresponsableSelect > 0 ){
            $filtros["corresponsable"]= $request->corresponsableSelect;
            foreach ($resultados as $solucion) {
                foreach ($solucion->actor_solucion as $actor_solucion) {
                    if($actor_solucion-> user_id == $request->corresponsableSelect && $actor_solucion->tipo_actor == 2){
                        array_push($resultadoAuxiliar, $solucion);
                        $hayFiltros = true;
                    }
                }
            }
        }

        if( $hayFiltros == true){
            unset($resultadoAuxiliar[0]);
            $resultadoAuxiliar = array_unique($resultadoAuxiliar);
            $resultadoAuxiliar = Collection::make($resultadoAuxiliar);

            $resultados = $resultadoAuxiliar;
        }

        unset($filtros[0]);

        return view('publico.reportes.reporte-ccpt')->with([
                                            "parametro"=>$buscar,
                                            "resultados"=>$resultados,
                                            "filtros"=>$filtros
                                        ]);


        

    }

    public function consejosectorial(){
        return view('csp.home');
    }


}
