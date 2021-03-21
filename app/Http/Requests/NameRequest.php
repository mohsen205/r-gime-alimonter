<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NameRequest extends FormRequest
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
            'name' => [ 'string', 'max:255'],
            'email' => ['string', 'email', 'max:255'],
        ];
    }
    public function messages()
    {
        return [
            'name.max:255' => 'le champ ne depasse pas 255 character',
            'email.string' => 'L\'e-mail doit être une chaîne.',
            'name.string' => 'le nom doit etre une chaine'
        ];
    }
}
