<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FormSucursalRequest extends Request
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
            'empresa_id' => 'required',
            'manzana' => 'required|size:1',
            'lote' => 'required|numeric',
        ];
    }
}
