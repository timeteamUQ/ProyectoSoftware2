<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SaveUserRequest extends Request
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
            'tipod'     => 'required|in:cc,tarjeta',
            'identificacion'    => 'required',
            'nombre'   => 'required|max:100',
            'telefonor'    => 'required',

            'direccionr'    => 'required',
            'ciudad'    => 'required',
            'departamento'    => 'required',
            'pais'    => 'required',

            'email'    => 'required',
            'user'     => 'required',
          
            'tipo'     => 'required|in:cliente,administrador'
        ];
    }
}
