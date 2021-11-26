<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PdfController extends Controller
{
    public function imprimirpersonas(Request $request){
        $personas = DB::table('personas as per') ->select(
            'per.documentoidentidad','per.primer_nombre',
            'per.segundo_nombre','per.primer_apellido',
            'per.segundo_apellido'
            )->get();
       $pdf = \PDF::loadView('Pdf.personasPDF',['personas' => $personas ]);
       $pdf->setPaper('carta', 'A4');
       return $pdf->download('Listado de Personas.pdf');
    }
    
    public function imprimirPersona($id,$primer_nombre){
        
        $registro = DB::table('personas as per')->select(
            'per.documentoidentidad','per.primer_nombre',
            'per.segundo_nombre','per.primer_apellido',
            'per.segundo_apellido'
        )->where ('id', '=', $id)
        ->get();
        //dd($registro);

        $pdf = \PDF::loadView('Pdf.personasPDF',['personas' => $registro ]);
        $pdf->setPaper('carta', 'A4');
        //se coloca primero el parametro y por ultimo el punto de extension y debe de ser del mismo nombre del campo de la tabla
       return $pdf->download($primer_nombre.'.pdf');
    }

}
