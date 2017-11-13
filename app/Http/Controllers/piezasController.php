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

        $estados      = Estados::all();
        $descriptores = Descriptores::all();
        $tipos        = Tipos::all();
        $piezas = Piezas::findOrFail($id);
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
            'registro'          => 'required|unique:piezas|min:3|max:200',
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
        $estados      = Estados::all();
        $descriptores = Descriptores::all();
        $tipos        = Tipos::all();
        $piezas = Piezas::findOrFail($id);
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
        $nuevo = $request->validate([
            'registro'          => 'required|unique:piezas|min:3|max:200',
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

        DB::table('piezas')
            ->where('id', $request->id)
            ->update(['registro'  => $request->registro,
            'tipo_id'             => $request->tipo_id,
            'titulo'              => $request->titulo,
            'autor'               => $request->autor,
            'estilo'              => $request->estilo,
            'material'            => $request->materia,
            'epoca'               => $request->epoca,
            'fecha'               => $request->fecha,
            'estado_id'           => $request->estado_id,
            'procedencia'         => $request->procedencia,
            'ubicacion'           => $request->ubicacion,
            'fotografo'           => $request->fotografo,
            'descripcion'         => $request->descripcion,
            'observaciones'       => $request->observaciones,
            'descriptores_id'     => $request->descriptores_id]);

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
