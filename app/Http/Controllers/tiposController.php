<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Tipos;
use Illuminate\Http\Request;

class tiposController extends Controller
{
    public function index () {
        $tipos = Tipos::all();
        return view ('tipos.index',compact('tipos'));
    }
    public function create()
    {
        return view ('tipos.nuevo');
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
            'nombre' => 'required|unique:tipos|regex:/^[a-zA-Z]+$/u|min:3|max:200',
        ]);

        $nuevo['nombre']=strtoupper($nuevo['nombre']);

        Tipos::create($nuevo);

        return redirect('tipos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipos = Tipos::findOrFail($id);
        return view ('tipos.modificar',compact('tipos','id'));

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
        $nuevo = Tipos::find($request->id);

        $valido = $request->validate([
            'nombre' => 'required|unique:tipos|regex:/^[a-zA-Z]+$/u|min:3|max:200',
        ]);

        $nuevo->nombre =strtoupper($request->nombre);
        //$nuevo->nombre = $request->nombre;

        //DB::table('tipos')
        //    ->where('id', $request->id)
        //    ->update(['nombre' => $request->nombre]);

        $nuevo->save();

        return redirect ('/tipos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tipos')->where('id', '=', $id)->delete();
        
        return redirect ('/tipos');
    }
}
