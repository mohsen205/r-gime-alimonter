<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewRequest extends FormRequest
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
            'taille'=> 'required | numeric ',
            'poid' => 'required | numeric',
            'date' => 'required | date'
        ];
    }
    public function messages()
    {
        return[
            'taille.required' => 'Le champ taille est obligatoire.',
            'poid.required' => 'Le champ poid est obligatoire.',
            'date.required' => 'Le champ date est obligatoire.',
        ];
    }

}
