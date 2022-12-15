<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserPageRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'age' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'email' => 'required|email:rfc',
            'password' => 'required|min:8|max:20',
            'password-repeat' => 'required|same:password'
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Поле имя является обязательным',
            'last_name.required' => 'Поле фамилия является обязательным',
            'age.required' => 'Поле возраст является обязательным',
            'height.required' => 'Поле рост является обязательным',
            'weight.required' => 'Поле вес является обязательным',
            'email.required' => 'Поле email является обязательным',
            'email.email' => 'Email должен быть действительным адресом электронной почты',
            'password.required' => 'Поле пароль является обязательным',
            'password.min' => 'Пароль должен быть не менее 8 символов',
            'password.max' => 'Пароль должен быть не более 20 символов',
            'password-repeat.required' => 'Повторите пароль',
            'password-repeat.same' => 'Пароли не совпадают',

        ];
    }
}
