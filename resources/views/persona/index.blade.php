@extends('layout.plantilla') 
@section('contenido')
<div class="row">
    <div class="col-md col-xs-12">
        @include('persona.search')
    </div>
    <div class="col-md-2">
        <a href="persona/create" class="pull-right">
            <button class="btn btn-success">Crear Persona</button>
        </a>
    </div>    
</div>
<h3>Reporte Todos Las personas <a href="\imprimirPersonas">
    <button class="btn btn-success"><span class="glyphicon glyphicon-downloadalt"></span>Generar PDF</button>
</a></h3>

<div class="row">
    <div class="col-md-12 col-xs-12">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <th>Id</th>
                    <th>Documento Identidad</th>
                    <th>Primer Nombre</th>
                    <th>Segundo Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Telefono</th>
                    <th width="377">Opciones</th>
                </thead>
                <tbody>
                    @foreach($personas as $persona)
                    <tr>
                        <td>{{ $persona->id }}</td>
                        <td>{{ $persona->documentoidentidad }}</td>
                        <td>{{ $persona->primer_nombre }}</td>
                        <td>{{ $persona->segundo_nombre}}</td>
                        <td>{{ $persona->primer_apellido }}</td>
                        <td>{{ $persona->segundo_apellido }}</td>
                        <td>{{ $persona->telefono }}</td>
                        <td>
                            <a href="{{URL::action('PersonaController@edit',$persona->id)}}">
                                <button class="btn btn-primary">Actualizar</button>
                            </a>
                            <a href="" data-target="#modal-delete-{{$persona->id}}" data-toggle="modal">
                                <button class="btn btn-danger">Eliminar</button>
                            </a>
                            <a href="\imprimirPersona/{{$persona->id}}/{{$persona->primer_nombre}}">
                                <button class="btn btn-success"><span class="glyphicon glyphicon-downloadalt">                                    
                                </span> PDF</button>
                            </a>
                        </td>
                    </tr>
                    @include('persona.modal')
                    @endforeach
                </tbody>                    
            </table>
        </div>
    {{$personas->links()}}
    </div>
</div>
@endsection
