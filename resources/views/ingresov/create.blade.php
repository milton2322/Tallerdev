 @extends('layout.plantilla') 
 @section('contenido') 
 <div class="row"> 
     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
         <h3>Ingresar Vehiculo</h3> 
         @if (count($errors)>0) 
            <div class="alert alert-danger"> 
                <ul> @foreach ($errors->all() as $error) 
                    <li>{{$error}}</li> 
                    @endforeach 
                </ul> 
            </div> 
        @endif 
            </div> 
        </div> 
        {!!Form::open(array('url'=>'ingresov','method'=>'POST','autocomplete'=>'off'))!!} {{Form::token()}}
        <div class="form-group"> 
            <label for="fecha">Fecha Ingreso</label> 
            <input type="text" name="fecha_ingreso" class="form-control" placeholder="Fecha Ingreso.." value="{{date('Y-m-d H:i:s') }}" readonly> 
        </div> 
        <div class="form-group"> 
            <label for="estado">Estado</label> 
            <select name="estado" id="estado" class="form-control selectpicker" data-livesearch="true" > 
                <option value="" disabled selected>Opcion de Estado:</option> <option value="1">Mantenimiento</option> 
                <option value="2">Pintura</option> 
            </select> 
        </div> 
        <div class="form-group"> 
            <label for="Role">Vehiculo - Placa</label> 
            <select name="vehiculos_id" id="vehiculos_id" class="form-control selectpicker" data-livesearch="true" >
                <option value="" disabled selected>Vehiculo:</option> 
                @foreach($vehiculo as $vehiculo) 
                <option value="{{$vehiculo->id}}">{{ $vehiculo->placa }}</option> 
                @endforeach
            </select>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group"><br>
                <button class="btn btn-primary" type="submit">
                    <span class="glyphicon glyphicon-ok"></span> Guardar
                </button>
                <button class="btn btn-danger" type="reset">
                    <span class="glyphicon glyphicon-remove"></span> Vaciar Campos
                </button>
                <a class="btn btn-info" type="reset" href="{{url('ingresov')}}">
                    <span class="glyphicon glyphicon-home"></span> Regresar 
                </a>
            </div>
        </div> 
    </div>  
</div> 
{!!Form::close()!!} 
@endsection