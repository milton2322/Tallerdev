<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Ingreso_vehiculo;
use App\vehiculo;

use App\Http\Requests\Ingreso_VehiculoCreateRequest;

class Ingreso_VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            $ingresov=Ingreso_vehiculo::orderBy('id','DESC')
            ->paginate(3);
            return view('ingresov.index',["ingresov"=>$ingresov,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehiculo=Vehiculo::orderBy('placa','DESC') 
        ->select('vehiculos.placa', 'vehiculos.id') 
        ->get();
        return view('ingresov.create')->with('vehiculo',$vehiculo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Ingreso_VehiculoCreateRequest $request)
    {
        $ingreso=new Ingreso_vehiculo; 
        $ingreso ->fecha_ingreso=$request->get('fecha_ingreso'); 
        $ingreso ->estado=$request->get('estado'); 
        $ingreso ->vehiculos_id=$request->get('vehiculos_id'); 
        $ingreso ->save();

        return Redirect::to('ingresov');
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
        //
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
