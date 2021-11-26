<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cita;
use Illuminate\Support\Facades\Redirect;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request)
        {
           $query=trim($request->get('searchText'));
           $citas=Cita::orderBy('id','DESC')
          ->where('documentoidentidad','LIKE','%'.$query.'%' )
          ->orwhere('nombre_estudiante','LIKE','%'.$query.'%')
          ->paginate(10); 


         return view('cita.index',compact('citas'));

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('cita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $citas=new Cita; 
        $citas->documentoidentidad=$request->get('documento'); 
        $citas->nombre_estudiante=$request->get('pnombre'); 
        $citas->apellido_estudiante=$request->get('papellido'); 
        $citas->grupo=$request->get('grupo'); 
        $citas->telefono=$request->get('telefono'); 
        $citas->nombre_director=$request->get('ndirec'); 
        $citas->fecha_cita=$request->get('fcita');
        $citas->save(); 
        return Redirect::to('cita');
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
        $citas=Cita::findOrFail($id); 
        return view("cita.edit",["citas"=>$citas]);
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
        $citas=Cita::findOrFail($id); 
        $citas->documentoidentidad=$request->get('documento'); 
        $citas->nombre_estudiante=$request->get('pnombre'); 
        $citas->apellido_estudiante=$request->get('papellido'); 
        $citas->grupo=$request->get('grupo'); 
        $citas->telefono=$request->get('telefono'); 
        $citas->nombre_director=$request->get('ndirec'); 
        $citas->fecha_cita=$request->get('fcita');
        $citas->update(); 
        return Redirect::to('cita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $citas=Cita::findOrFail($id); 
        $citas->delete(); 
        return Redirect::to('cita');
    }

    public function calendar(){
        $citas = Cita::orderBy('id','DESC')->get();
        return view('cita.calendar', compact(['citas']));
    }

    
   
}
