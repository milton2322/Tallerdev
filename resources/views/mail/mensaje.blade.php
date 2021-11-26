<!Doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
<html>
 <head>
  <title>Seguimiento Solicitud</title>
 </head>
 <body>
 <p>Hola! Se ha Gestionado tu solicitud</p>
    <p>Estos son los datos de la Solicitud:</p>
    <ul>
        <li>Nombre: {{ $data['name']  }}</li>
        <li>Mensaje: {{ $data['message'] }}</li>
        
    </ul>
    <p>Y esta es la Respuesta a tu solicitud</p>
    <ul>
        <li>Estado Solicitud: {{ $data['estado'] }}</li>
       
    </ul>
   
  </div>
 </body>
</html>