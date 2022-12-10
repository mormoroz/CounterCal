<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthenticationRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required|email:rfc',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Поле email является обязательным',
            'email.email' => 'Email должен быть действительным адресом электронной почты.',
            'password.required' => 'Поле пароль является обязательным'
        ];
    }
}
