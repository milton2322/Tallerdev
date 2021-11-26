@extends('layout.plantilla') 
@section('contenido')
<div class="row"> 
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
    <h3>Agendar Cita</h3> 
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
{!!Form::open(array('url'=>'cita','method'=>'POST','autocomplete'=>'off'))!!} 
{{Form::token()}} 
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="form-group"> 
    <label for="documento">Numero Documento del Estudiante</label> 
    <input type="number" name="documento" id="documento" class="form-control" placeholder="Digite el numero de documento">
</div> </div> 
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="form-group"> 
    <br>
    <label for="pnombre">Nombre Estudiante</label> 
    <input type="text" name="pnombre" id="pnombre" class="form-control" placeholder="Nombre Estudiante">
</div>
</div>
        
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
    <div class="form-group"> 
        <br><label for="papellido">Apellido Estudiante</label>
        <input type="text" name="papellido" id="papellido" class="form-control" placeholder="Apellido Estudiante">

        </div> 
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
        <div class="form-group"> 
        <br> <label for="grupo">Grupo</label>
        <input type="number" name="grupo" id="grupo" class="form-control" placeholder="Digite el grupo">

        </div> 
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
        <div class="form-group"> 
        <br> <label for="email">Telefono</label>
        <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono">

        </div> 
    </div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="form-group"> 
    <br><label for="pnombre">Nombre Director</label> 
    <input type="text" name="ndirec" id="ndirec" class="form-control" placeholder="Nombre Director">
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
        <div class="form-group"> 
        <br> <label for="email">Fecha Cita</label>
        <input type="text" name="fcita" id="fcita" class="form-control" placeholder="Fecha Cita">

        </div> 
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
        <div class="form-group"> <br>
    <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> 
    Guardar</button> 
    <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> Vaciar Campos</button> 
    <a class="btn btn-info" type="reset" href="{{url('cita')}}"><span class="glyphicon glyphicon-home"></span> Regresar </a>
    </div> 
    </div> 
</div>
{!!Form::close()!!}
@endsection