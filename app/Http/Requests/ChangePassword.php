<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\CheckPassword;
class ChangePassword extends FormRequest
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
            'password' => ['required ' , new CheckPassword],
            'password_confirmation' => ['required', 'string', 'min:8'],
        ];
    }
    public function messages()
    {
        return [
            'password' =>  'Le champ du mot de passe est obligatoire.',
            'password_confirmation.required' => 'Le champ du mot de passe est obligatoire.',
            'password_confirmation.min:8' =>'Le mot de passe doit comporter au moins 8 caractères.' ,
        ];
    }
}
