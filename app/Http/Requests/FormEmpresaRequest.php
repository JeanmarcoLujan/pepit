<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FormEmpresaRequest extends Request
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
            'ruc_empresa' => 'required|numeric|size:11',
            
            'razon_social' => 'required',
            'representante' => 'required',
            'dni'=>'required|size:8|numeric',
            'telefono1' => 'required|numeric',
            'anexo1' => 'required|numeric',
            'telefono2' => 'required|numeric',
            'telefono3' => 'required|numeric',
            'correo1'=>'required|e-mail',
            'correo2'=>'required|e-mail',
        ];
    }
}
