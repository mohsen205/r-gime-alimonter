<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
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
            'sex' => 'required | string',
            'taille'=> 'required | numeric ',
            'poid' => 'required | numeric',
            'age' => 'required | numeric',
        ];
    }
    public function messages()
    {
        return[
            'sex.required' => 'Le champ sexe est obligatoire.',
            'taille.required' => 'Le champ taille est obligatoire.',
            'poid.required' => 'Le champ poid est obligatoire.',
            'age.required' => 'Le champ age est obligatoire.',
        ];
    }
}

