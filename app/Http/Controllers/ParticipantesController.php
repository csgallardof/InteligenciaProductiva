<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPExcel; 
use PHPExcel_IOFactory; 
use PHPExcel_Shared_Date;
use DB;
use File;
use App\User;
use Illuminate\Support\Collection as Collection;
use Laracasts\Flash\Flash;


class ParticipantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index(Request $request)
    {
   	    $rol = DB::table('roles')->where('nombre_role', "Participante")->first();  //Obtener id rol de participante
    	
        $participantes = User::where('tipo_fuente','=','1')                        //filtro para tener a todos los usuarios con tipo fuento = 1 y con rol participante
                                ->whereHas('roles', function ($q) use ($rol) {
                                    $q->where('roles.id', $rol-> id);
                                })
        ->orderBy('apellidos','ASC')->paginate(20);
        
        return view('admin.participantes.home')->with(["participantes"=>$participantes, "parametro"=>$request->parametro]); 
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.participantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
         *
         * Cargamos el  Archivo Excel para trabajarlo 
         *
        */ 
        $objPHPExcel = PHPExcel_IOFactory::load( storage_path('app').'/storage/'.$request-> nombreArchivo ); 
        
        
        /*
         *
         * Hoja REGISTRO
         *
        */
        
        $objPHPExcel->setActiveSheetIndex(0);   //indicamos que vamos a trabajar en la hoja 0 que es la de registro
        $objWorksheet = $objPHPExcel->getActiveSheet();  //

        $provincia= $objWorksheet->getCell("B4")->getValue();   //obtenemos el nombre de la provincia
        $provincia = DB::table('provincias')->where('nombre_provincia', $provincia)->first();
        
        $evento= $objWorksheet->getCell("B1")."-".$provincia->nombre_provincia;    //obtenemos el nombre del evento        
        $evento = DB::table('eventos')->where('nombre_evento',$evento)->first();
        $coordinador= $objWorksheet->getCell("B2");     //obtenemos el coordinador
        
        $InvDate= $objWorksheet->getCell("B3")->getValue();   //obtenemos el valor de la fecha, pero esta en entero, que es el resultado de restar la fecha actual menos la fecha 01/01/1990
        $timestamp = PHPExcel_Shared_Date::ExcelToPHP($InvDate);  //transformamos el valor obtenido a timestamp
        $fecha_php = date("Y-d-m",$timestamp);                    //formateamos el timestamp a solo Y-d-m  
        
        $highestRow = $objWorksheet->getHighestRow();   //obtenemos el número total de filas
        
        for ($i = 7; $i <= $highestRow; $i++) {         //recorremos todas los registros, empiezan desde la fila 7 hasta el número total de filas
            
            $informacion[] = array(                     //en una variable recogemos los registro agrupandolos dentro de un array
                'numFila' => $i,
                'nombre' => $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue(),
                'apellidos' => $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue(),
                'cedula' => $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue(),
                'email' => $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue(),
                'celular' => $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue(),
                'telefonoExtension' => $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue(),
                'grupo' => $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue(),
                'tipo' => $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue(),
            );
        }

        $countError = $countOK = 0;
            
        foreach ($informacion as $registro) {   //recorremos todos los registros recogidos
            if( $registro["nombre"] != "" && $registro["apellidos"] != "" && $registro["cedula"] != "" && $registro["email"] != "" 
                && $registro["celular"] != "" && $registro["telefonoExtension"] != "" 
                && $registro["grupo"] != "" && $registro["tipo"] != "")
            {    //validamos que todos los campos de cada registro no se encuentren vacios
                $userAux = DB::table('users')->where('cedula', $registro['cedula'])->first();
                if( is_null($userAux) ) {
                
                    $user = new user;

                    $sector = DB::table('sectors')->where('nombre_sector', $registro['grupo'])->first();
                    if($sector == null ){
                        $error = "Fila ".$registro['numFila'].": Ingrese un grupo v&aacute;lido";
                        array_push($errores, $error); 
                    }

                    $vsector = DB::table('vsectors')->where('nombre_vsector', $registro['tipo'])->first();
                    if($vsector == null ){
                        $error = "Fila ".$registro['numFila'].": Ingrese un tipo de participante v&aacute;lido";
                        array_push($errores, $error); 
                    }
                    
                    $user-> name  = $registro["nombre"];   // Id Eslabón de la cadena Productiva
                    $user-> apellidos = $registro["apellidos"];
                    $user-> cedula = $registro["cedula"];
                    $user-> password = $registro["cedula"];
                    $user-> email = $registro["email"];

                    $user-> telefono = $registro['telefonoExtension'];
                    $user-> celular = $registro['celular'];
                    
                    $user-> sector_id = $sector-> id;
                    $user-> vsector_id =  $vsector-> id;

                    $user-> tipo_fuente= 1;     // 1 = despliegue territorial

                    $user-> save(); 
                    $rol = DB::table('roles')->where('nombre_role', "Participante")->first();

                    $user->roles()-> attach($rol-> id);
                    $user->evento()-> attach($evento-> id);

                    
                    $countOK++ ;    
                    
                }    

            }else{
                $countError++;
            }      
        }//FIN del foreach
        
        Flash::success("Se registraron ".$countOK." participantes.");
        return redirect('participantes');
    }	
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }

    public function vistaPreviaRegistro(Request $request)
    {
        $errores[] = array();
        $file = $request->file('archivo');   //obtenemos el campo file definido en el formulario
        $nombreArchivo = $file->getClientOriginalName();   //obtenemos el nombre del archivo
        $nombreArchivo = strtotime("now")."-".$nombreArchivo;     // agregamos la fecha actual unix al inicio del nombre del archivo
        \Storage::disk('local')->put($nombreArchivo,  \File::get($file));   //indicamos que queremos guardar un nuevo archivo en el disco local
        /*
         * Cargamos el  Archivo Excel para trabajarlo 
        */ 
        $objPHPExcel = PHPExcel_IOFactory::load( storage_path('app').'/storage/'.$nombreArchivo); 
        
        /*
         *
         * Hoja REGISTRO
         *
        */
        
        $objPHPExcel->setActiveSheetIndex(0);   //indicamos que vamos a trabajar en la hoja 0 que es la de registro
        $objWorksheet = $objPHPExcel->getActiveSheet();  //

        $provincia= $objWorksheet->getCell("B4")->getValue();   //obtenemos el nombre de la provincia
        $provincia = DB::table('provincias')->where('nombre_provincia', $provincia)->first();
        
        if( is_null($provincia) ){
            $error = "Ingrese una provincia v&aacute;lida";
            array_push($errores, $error); 
        }
        
        $nombreEvento= $objWorksheet->getCell("B1")."-".$provincia->nombre_provincia;    //obtenemos el nombre del evento
        $nombreEventoAuxiliar= DB::table('eventos')->where([  ['nombre_evento', '=', $nombreEvento], /*['provincia_id', '=', $provincia->id]*/ ])->first();
        if( $nombreEventoAuxiliar != null){
            $error = "El nombre del evento ya se encuentra registrado";
            array_push($errores, $error); 
        }
        
        $coordinador= $objWorksheet->getCell("B2");     //obtenemos el coordinador
        
        $InvDate= $objWorksheet->getCell("B3")->getValue();   //obtenemos el valor de la fecha, pero esta en entero, que es el resultado de restar la fecha actual menos la fecha 01/01/1990
        $timestamp = PHPExcel_Shared_Date::ExcelToPHP($InvDate);  //transformamos el valor obtenido a timestamp
        $fecha_php = date("Y-d-m",$timestamp);                    //formateamos el timestamp a solo Y-d-m  
        
        $highestRow = $objWorksheet->getHighestRow();   //obtenemos el número total de filas
        
        for ($i = 7; $i <= $highestRow; $i++) {         //recorremos todas los registros, empiezan desde la fila 7 hasta el número total de filas
            
            $informacion[] = array(                     //en una variable recogemos los registro agrupandolos dentro de un array
                'numFila' => $i,
                'nombre' => $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue(),
                'apellidos' => $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue(),
                'cedula' => $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue(),
                'email' => $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue(),
                'celular' => $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue(),
                'telefonoExtension' => $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue(),
                'grupo' => $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue(),
                'tipo' => $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue(),
            );
        }

        $users[] = array(); 
        $countUserExists = 0; 
        $arrayValProblemas[] = array(); 
            
        foreach ($informacion as $registro) {   //recorremos todos los registros recogidos
            if( $registro["nombre"] != "" && $registro["apellidos"] != "" && $registro["cedula"] != "" && $registro["email"] != "" 
                && $registro["celular"] != "" && $registro["telefonoExtension"] != "" 
                && $registro["grupo"] != "" && $registro["tipo"] != "")
            {    //validamos que todos los campos de cada registro no se encuentren vacios
                $userAux = DB::table('users')->where('cedula', $registro['cedula'])->first();
                if( is_null($userAux) ) {
                
                    $user = new user;

                    $sector = DB::table('sectors')->where('nombre_sector', $registro['grupo'])->first();
                    if($sector == null ){
                        $error = "Fila ".$registro['numFila'].": Ingrese un grupo v&aacute;lido";
                        array_push($errores, $error); 
                    }

                    $vsector = DB::table('vsectors')->where('nombre_vsector', $registro['tipo'])->first();
                    if($vsector == null ){
                        $error = "Fila ".$registro['numFila'].": Ingrese un tipo de participante v&aacute;lido";
                        array_push($errores, $error); 
                    }
                    
                    $user-> name  = $registro["nombre"];   // Id Eslabón de la cadena Productiva
                    $user-> apellidos = $registro["apellidos"];
                    $user-> cedula = $registro["cedula"];
                    $user-> email = $registro["email"];

                    $user-> telefono = $registro['telefonoExtension'];
                    $user-> celular = $registro['celular'];
                    
                    $user-> sector_id = $sector-> id;
                    $user-> vsector_id =  $vsector-> id;

                    $user-> tipo_fuente= 1;     // 1 = despliegue territorial
                    
                    array_push($users, $user); 
                }else{
                    $countUserExists++;
                }    

            }else{
                $error = "Fila ". $registro['numFila'].": Se encontraron campos vacios.";
                array_push($errores, $error); 
            }      
        }//FIN del foreach
        
        unset($users[0]);
        unset($errores[0]);
        
        if(count($errores) > 0){
            File::delete( storage_path('app').'/storage/'.$nombreArchivo);
            Flash::error("Se encontraron ". count($errores)." error(es) detallados a continuaci&oacute;n:");
        }else{
            Flash::info("<ul>
                            <li>Participantes nuevos: ". count($users) ."</li>
                            <li>Participantes existentes: ".$countUserExists ."</li>
                        </ul>
                        <br> Haga click en <b>\"Cargar datos \"</b> para confirmar.");
        }

        $datos = Collection::make($users);
        $errores = Collection::make($errores);

        return view('admin.participantes.vistaPreviaRegistro')->with(["datos"=>$datos, "errores"=>$errores, "nombreArchivo"=>$nombreArchivo, "nombreEvento"=>$nombreEvento]); 
        
    } 


}
