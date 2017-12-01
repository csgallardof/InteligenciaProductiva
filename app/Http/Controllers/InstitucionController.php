<?php

namespace App\Http\Controllers;
use App\ActorSolucion;
use App\User;
use DB;

use Illuminate\Http\Request;

class InstitucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rol = DB::table('roles')->where('nombre_role', "Institución")->first();  //Obtener id rol de participante
        
        $instituciones = User::search($request-> parametro)->where('tipo_fuente','=','3')
                            ->whereHas('roles', function ($q) use ($rol) {
                                    $q->where('roles.id', $rol-> id);
                            })
        ->orderBy('name','ASC')->paginate(25);

        return view('admin.institucion.home')->with(["instituciones"=>$instituciones]);   
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.institucion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $institucion = new user;
        $this ->validate($request,[
            'nombre_user' =>'required',
            'email' =>'min:15|max:250|required|unique:users',
        ]);
        $institucion->name = $request->nombre_user;
        $institucion->apellidos = "";
        $institucion->cedula = "";
        $institucion->email = $request->email;
        $institucion->password = bcrypt("acdc");
        $institucion->tipo_fuente = 3;
        $institucion->sector_id = 0;
        $institucion->vsector_id = 0;
        $institucion-> save(); 
        $rol = DB::table('roles')->where('nombre_role', "Institucion")->first();
        $institucion->roles()-> attach($rol-> id);
        return redirect('institucion');
        
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
        //
        $item = User::find($id);

        return view('admin.institucion.edit', compact('item'));
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
        $institucion = user::find($id);
        $this ->validate($request,[
            'nombre_user' =>'required',
            'email' =>'min:15|max:250|required|unique:users',
        ]);
        $institucion->name = $request->nombre_user;
        $institucion->apellidos = "";
        $institucion->cedula = "";
        $institucion->email = $request->email;
        $institucion->password = bcrypt("acdc");
        $institucion->tipo_fuente = 3;
        $institucion->sector_id = 0;
        $institucion->vsector_id = 0;
        $institucion-> save(); 
       
        return redirect('instituciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
