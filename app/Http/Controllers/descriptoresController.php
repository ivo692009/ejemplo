<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Descriptores;
use Illuminate\Http\Request;

class descriptoresController extends Controller
{
    public function index () {

        $descriptores = Descriptores::all();
        return view ('descriptores.index',compact('descriptores'));
    }

    
    public function create()
    {
        return view ('descriptores.nuevo');
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
            'nombre' => 'required|unique:descriptores|regex:/^[a-zA-Z]+$/u|min:3|max:200',
        ]);

        $nuevo['nombre']=strtoupper($nuevo['nombre']);

        Descriptores::create($nuevo);

        return redirect('descriptores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $descriptores = Descriptores::findOrFail($id);
        return view ('descriptores.modificar',compact('descriptores','id'));

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

        $nuevo = Descriptores::find($request->id);

        $valido = $request->validate([
            'nombre' => 'required|unique:descriptores|regex:/^[a-zA-Z]+$/u|min:3|max:200',
        ]);

        $nuevo->nombre =strtoupper($request->nombre);
        $nuevo->save(); 

        // DB::table('descriptores')
        //     ->where('id', $request->id)
        //     ->update(['nombre' => $request->nombre]);

        return redirect ('/descriptores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('descriptores')->where('id', '=', $id)->delete();
        
        return redirect ('/descriptores');
    }
}
