<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParticipanteRequest extends FormRequest
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
            'nombre' => 'required|max:255',
            'email' => 'required|unique:participantes,email,'. $this->id .',id',
            'celular' => 'required|unique:participantes,celular,'. $this->id .',id',
            'empresa' => 'required|max:100',
            'pagina' => 'required',
        ];
    }
}
