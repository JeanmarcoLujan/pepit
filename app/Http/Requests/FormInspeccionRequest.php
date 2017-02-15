<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FormInspeccionRequest extends Request
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
        'sucursal_id' => 'required',
        'nombre' => 'required',
        'observacion'=>'required',
        'recibido'=>'required',
        'fecha'=>'required',
        'foto' => 'required|mimes:jpeg,jpg,bmp,png',
        ];
    }
}
