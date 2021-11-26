@extends('layout.plantilla') 
@section('contenido')

<div class="row"> <div class="col-md-8 col-xs-12"> 
    @include('cita.search') 
</div> <div class="col-md-2"> 
    <a href="cita/create" class="pull-right"> 
    <button class="btn btn-success">Agendar Cita</button> 
</a> 
</div> 
</div> 

<div class="row"> 
    <div class="col-md-12 col-xs-12"> 
        <div class="table-responsive"> 
            <table class="table table-striped table-hover"> 
                <thead> 
                    <th>Id</th> 
                    <th>documento Identidad</th> 
                    <th>Nombre Estudiante</th> 
                    <th>Apellido Estudiante</th> 
                    <th>Grupo</th>
                    <th>Telefono</th>
                    <th>Nombre Director</th>
                    <th>Fecha Cita</th>
                    <th width="180">Opciones</th> 
                 </thead> 
                 <tbody> 
                 @foreach($citas as $cita) 
                <tr>
                <td>{{ $cita->id }}</td>
                 <td>{{ $cita->documentoidentidad }}</td> 
                 <td>{{ $cita->nombre_estudiante }}</td> 
                 <td>{{ $cita->apellido_estudiante }}</td> 
                 <td>{{ $cita->grupo }}</td>
                 <td>{{ $cita->telefono }}</td>
                 <td>{{ $cita->nombre_director }}</td> 
                 <td>{{ $cita->fecha_cita }}</td> 
                 <td> 
                     <a href="{{URL::action('CitaController@edit',$cita->id)}}"><button class="btn btn-primary">Actualizar</button></a>
                     <a href="" data-target="#modal-delete-{{$cita->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                </td> 
            </tr> 
            @include('cita.modal')
                @endforeach 
                    </tbody> 
                </table> 
            </div>
            {{$citas->links()}}
        </div> 
    </div> 
    @endsection