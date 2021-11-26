@extends('layout.plantilla') 
@section('contenido')
<div class="row">
    <div class="col-md col-xs-12">
        @include('ingresov.search')
    </div>
    <div class="col-md-2">
        <a href="ingresov/create" class="pull-right">
            <button class="btn btn-success">Ingresar Vehiculo</button>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-xs-12">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <th>Id</th>
                    <th>Placa</th>
                    <th>Fecha de ingreso</th>
                    <th>Estado</th>
                    <th width="180">Opciones</th>
                </thead>
                <tbody>
                    @foreach($ingresov as $sv)
                    <tr>
                        <td>{{ $sv->id }}</td> 
                        <td>{{ $sv->vehiculos->placa}}</td> 
                        <td>{{ $sv->fecha_ingreso }}</td> 
                        <td>{{ $sv->estado}}</td>
                        <td>
                            <a href="">
                                <button class="btn btn-primary">Salida</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>                    
            </table>
        </div>
    {{$ingresov->links()}}
    </div>
</div>
@endsection
