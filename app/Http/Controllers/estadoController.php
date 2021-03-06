<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Estados;
use Illuminate\Http\Request;

class estadoController extends Controller
{
    public function index () {
        $estados = Estados::all();
        return view ('estados.index',compact('estados'));
    }

    public function create()
    {
        return view ('estados.nuevo');
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
            'nombre' => 'required|unique:estados|regex:/^[a-zA-Z]+$/u|min:3|max:200',
        ]);


        $nuevo['nombre']=strtoupper($nuevo['nombre']);

        Estados::create($nuevo);

        return redirect('estados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estados = Estados::findOrFail($id);
        return view ('estados.modificar',compact('estados','id'));

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
        $nuevo = Estados::find($request->id);

        $valido = $request->validate([
            'nombre' => 'required|unique:estados|regex:/^[a-zA-Z]+$/u|min:3|max:200',
        ]);

        $nuevo->nombre =strtoupper($request->nombre);
        $nuevo->save();
        // DB::table('estados')
        //     ->where('id', $request->id)
        //     ->update(['nombre' => $request->nombre]);

        return redirect ('/estados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('estados')->where('id', '=', $id)->delete();

        return redirect ('/estados');
    }

}
