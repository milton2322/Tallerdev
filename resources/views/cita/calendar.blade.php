@extends('layout.plantilla')
@section('contenido')

<link rel='stylesheet'
href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css'/>

<div class="container">
    <div id='calendar'></div>
</div>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>

<script>
    $(document).ready(function() {
        $('#calendar').fullCalendar({
        locale: 'es',
        plugins: [ 'dayGrid', 'timeGrid', 'list', 'bootstrap' ],
        timeZone: 'UTC',
        themeSystem: 'bootstrap',
        weekNumbers: true,
        eventLimit: true,
            header: {
                left: 'prevYear prev,next nextYear today',
                center: 'title',
                right: 'agendaDay,agendaWeek,month'
            },
            buttonText: {
                today: 'Hoy',
                month: 'Mes',
                day: 'Día',
                week: 'Semana',
                year: 'Año'
            },
            monthNames:
            ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
            monthNamesShort:
            ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sept','Oct','Nov','Dic'],
            dayNames:
            ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
            dayNamesShort: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
                events : [
                    @foreach($citas as $cita){
                        title : '{{ $cita->nombre_estudiante }}',
                        start : '{{ $cita->fecha_cita }}',
                        url : '{{ route('cita.edit', $cita->id) }}'
                    },
                    @endforeach
                ]
            });
        });

</script>
@endsection