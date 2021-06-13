<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultarDosPeriodosRequest extends FormRequest
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
            'fecha_inicio_uno' => 'required',
            'fecha_final_uno' => 'required',
            'fecha_inicio_dos' => 'required',
            'fecha_final_dos' => 'required',
        ];
    }

    public function messages()
    {
        return [
           
            'fecha_inicio_uno.required'=> 'El campo fecha inicio es obligatorio.',
            'fecha_final_uno.required'=> 'El campo fecha inicio es obligatorio.',

            'fecha_inicio_dos.required'=> 'El campo fecha final es obligatorio.',
            'fecha_final_dos.required'=> 'El campo fecha final es obligatorio.',
            
        ];
    }
}
