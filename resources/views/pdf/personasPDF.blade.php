<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Personas | Sistema Web</title>
    </head>
    <body>
        <div class="container">
            <h3 class="text-center">Reporte de Personas</h3>
            <img src="" alt="" width='100px'>
            <br><br>
                <h1 class="text-center">Taller DEV</h1>
                <h3 class="text-center">NIT: 123456-1</h3>
                <h3 class="text-center">Tel. 555555</h3>
            <br> <br> <br>
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>Numero Identificación</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                </tr>
            @foreach($personas as $pre)
                <tr>
                    <td>ID: {{$pre->documentoidentidad}}</td>
                    <td>{{$pre->primer_nombre}} {{$pre->segundo_nombre}} </td>
                    <td>{{$pre->primer_apellido}} {{$pre->segundo_apellido}}</td>
                </tr>
            @endforeach
            </table>
            <h5 class="text-center">Grupo 511 - Tecnología en Sistemas</h5>
            <h6>Software de TallerDev version 1</h6>
        </div>
    </body>
</html>