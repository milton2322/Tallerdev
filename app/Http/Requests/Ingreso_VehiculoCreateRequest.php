<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Ingreso_VehiculoCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fecha_ingreso' => 'required',
            'estado' => 'required',
        ];
    }

    public function messages(){
        return [
            'fecha_ingreso.required' => 'La fecha ingreso debe ser un campo requerido',
            'estado.required' => 'El estado es un campo obligatorio',
            'vehiculo_id.required' => 'El vehiculo debe ser un campo requerido'
        ];
    }
}
