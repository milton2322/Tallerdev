@extends('layout.plantilla') 
@section ('contenido') 
<div class="row"> 
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
        <h3>Editar Cita</h3> 
        @if (count($errors)>0) 
        <div class="alert alert-danger"> 
            <ul> 
                
            @foreach ($errors->all() as $error) 
                <li>{{$error}}</li> 
                @endforeach 
            </ul> 
            </div> 
            @endif 
        </div> 
    </div> 
    {{Form::open(array('action'=>array('CitaController@update', $citas->id),'method'=>'patch'))}} 
    <div class="row"> 
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
            <div class="form-group"> <br> 
                <label for="documento">Numero documento del Estudiante</label> 
                <input type="number" name="documento" id="documento" class="form-control" value="{{$citas->documentoidentidad}}"> 
            </div> 
        </div> 
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
            <div class="form-group"> <br> 
            <label for="pnombre">Nombre Estudiante</label> 
            <input type="text" name="pnombre" id="pnombre" class="form-control" value="{{$citas->nombre_estudiante}}"> 
</div> 
</div> 
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

<div class="form-group"> <br> 
<label for="papellido">Apellido Estudiante</label>
        <input type="text" name="papellido" id="papellido" class="form-control" value="{{$citas->apellido_estudiante}}">
</div> 
</div> 
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
    <div class="form-group"><br> 
    <label for="grupo">Grupo</label>
        <input type="number" name="grupo" id="grupo" class="form-control" value="{{$citas->grupo}}">
</div> 
</div> 
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
    <div class="form-group"> <br> 
<label for="email">Telefono</label> 
<input type="text" name="telefono" id="telefono" class="form-control" value="{{$citas->telefono}}"> 
</div> 
</div> 
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
    <div class="form-group"> <br> 
    <label for="pnombre">Nombre Director</label> 
    <input type="text" name="ndirec" id="ndirec" class="form-control" value="{{$citas->nombre_director}}">
    </div> 
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
    <div class="form-group"> <br> 
    <label for="pnombre">Fecha Cita</label> 
    <input type="text" name="fcita" id="fcita" class="form-control" value="{{$citas->fecha_cita}}">
    </div> 
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
    <div class="form-group"> <br> 
    <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-refresh"></span> Actualizar </button> 
<a class="btn btn-info" type="reset" href="{{url('cita')}}"><span class="glyphicon glyphicon-home"></span> Regresar </a> 
</div> 
</div> 
</div> 
{!!Form::close()!!} 
@endsection