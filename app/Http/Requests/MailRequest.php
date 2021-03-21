<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailRequest extends FormRequest
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
            'email' => ['required','email' ,'string'],
            'message' => ['required','string']
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Le champ email est obligatoire.',
            'email.string' => 'L\'e-mail doit être une chaîne.',
            'message.string' => 'Le message doit être une chaîne.',
            'message.required' => 'Le message poid est obligatoire.',
        ];
    }
}
