<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorizationRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email-login' => 'required|email:rfc,dns',
            'password-login' => 'required|min:8|max:20'
        ];
    }

    public function messages()
    {
        return [
            'email-login.required' => 'Поле email является обязательным',
            'email-login.email' => 'Email должен быть действительным адресом электронной почты.',
            'password-login.required' => 'Поле пароль является обязательным',
            'password-login.min' => 'Пароль должен быть не менее 8 символов',
            'password-login.max' => 'Пароль должен быть не более 20 символов',
        ];
    }
}
