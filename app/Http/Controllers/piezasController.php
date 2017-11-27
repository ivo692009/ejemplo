<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Piezas;
use App\Descriptores;
use App\Estados;
use App\Tipos;

class piezasController extends Controller
{
    public function index () {
        $piezas = Piezas::all();
        return view ('piezas.index',compact('piezas'));
    }

    public function create()
    {
        $estados      = Estados::all();
        $descriptores = Descriptores::all();
        $tipos        = Tipos::all();
        return view ('piezas.nuevo',compact('estados','tipos','descriptores'));
    }

    public function ver($id){

        $piezas       = Piezas::findOrFail($id);
        $estados      = Estados::findOrFail($piezas->estado_id);
        $descriptores = Descriptores::findOrFail($piezas->descriptores_id);
        $tipos        = Tipos::findOrFail($piezas->tipo_id);

        return view ('piezas.ver',compact('piezas','estados','tipos','descriptores'));

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevo = $request->validate([
            'registro'          => 'required|unique:piezas',
            'tipo_id'           => 'required',
            'titulo'            => 'required|min:3|max:200',
            'autor'             => 'required|min:3|max:200',
            'estilo'            => 'required|min:3|max:200',
            'material'          => 'required|min:3|max:200',
            'epoca'             => 'required|min:3|max:200',
            'fecha'             => 'required',
            'estado_id'         => 'required',
            'procedencia'       => 'required|min:3|max:200',
            'ubicacion'         => 'required|min:3|max:200',
            'foto'              => 'image',
            'fotografo'         => 'required|min:3|max:200',
            'descripcion'       => 'min:3|max:240',
            'observaciones'     => 'min:3|max:200',
            'descriptores_id'   =>'required',
        ]);

        $nuevo['foto'] = $request->file('foto')->store('public');
        $nuevo['codigo']= "MSDB-".$request->registro;
        Piezas::create($nuevo);

        return redirect('piezas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $piezas       = Piezas::findOrFail($id);
        $estados      = Estados::all();
        $descriptores = Descriptores::all();
        $tipos        = Tipos::all();
        
        return view ('piezas.modificar',compact('piezas','id','estados','tipos','descriptores'));

    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $nuevo = Piezas::find($request->id);
        
        $valido = $request->validate([
            'registro'          => 'required|unique:piezas',
            'tipo_id'           => 'required',
            'titulo'            => 'required|min:3|max:200',
            'autor'             => 'required|min:3|max:200',
            'estilo'            => 'required|min:3|max:200',
            'material'          => 'required|min:3|max:200',
            'epoca'             => 'required|min:3|max:200',
            'fecha'             => 'required',
            'estado_id'         => 'required',
            'procedencia'       => 'required|min:3|max:200',
            'ubicacion'         => 'required|min:3|max:200',
            'fotografo'         => 'required|min:3|max:200',
            'descripcion'       => 'min:3|max:240',
            'observaciones'     => 'min:3|max:200',
            'descriptores_id'   =>'required',
        ]);

        
        $nuevo->registro    = $request->registro;
        $nuevo->codigo      = "MSDB-".$request->registro;
        $nuevo->tipo_id     = $request->tipo_id;
        $nuevo->titulo      = $request->titulo;
        $nuevo->autor       = $request->autor;
        $nuevo->estilo      = $request->estilo;
        $nuevo->material    = $request->material;
        $nuevo->epoca       = $request->epoca;
        $nuevo->fecha       = $request->fecha;
        $nuevo->estado_id   = $request->estado_id;
        $nuevo->procedencia = $request->procedencia;
        $nuevo->ubicacion   = $request->ubicacion;

        if($request ->hasFile('foto'))
        {
            $nuevo->foto = $request->file('foto')->store('public');
        }

        $nuevo->fotografo   = $request->fotografo;
        $nuevo->descripcion = $request->descripcion;
        $nuevo->observaciones = $request->observaciones;
        $nuevo->descriptores_id = $request->descriptores_id;

        $nuevo->save(); 

        // DB::table('piezas')
        //     ->where('id', $request->id)
        //     ->update(['registro'  => $request->registro,
        //     'tipo_id'             => $request->tipo_id,
        //     'titulo'              => $request->titulo,
        //     'autor'               => $request->autor,
        //     'estilo'              => $request->estilo,
        //     'material'            => $request->materia,
        //     'epoca'               => $request->epoca,
        //     'fecha'               => $request->fecha,
        //     'estado_id'           => $request->estado_id,
        //     'procedencia'         => $request->procedencia,
        //     'ubicacion'           => $request->ubicacion,
        //     'fotografo'           => $request->fotografo,
        //     'descripcion'         => $request->descripcion,
        //     'observaciones'       => $request->observaciones,
        //     'descriptores_id'     => $request->descriptores_id]);
            
            
    


        return redirect ('/piezas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('piezas')->where('id', '=', $id)->delete();
        
        return redirect ('/piezas');
    }
}
