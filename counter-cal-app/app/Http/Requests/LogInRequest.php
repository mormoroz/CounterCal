<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogInRequest extends FormRequest
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
            'name' => 'required',
            'father_name' => 'required',
            'age' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'email-sign' => 'required|email:rfc,dns',
            'password-sign' => 'required|min:8|max:20',
            'password-repeat' => 'required|same:password-sign'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле имя является обязательным',
            'father_name.required' => 'Поле фамилия является обязательным',
            'age.required' => 'Поле возраст является обязательным',
            'height.required' => 'Поле рост является обязательным',
            'weight.required' => 'Поле вес является обязательным',
            'email-sign.required' => 'Поле email является обязательным',
            'email-sign.email' => 'Email должен быть действительным адресом электронной почты',
            'password-sign.required' => 'Поле пароль является обязательным',
            'password-sign.min' => 'Пароль должен быть не менее 8 символов',
            'password-sign.max' => 'Пароль должен быть не более 20 символов',
            'password-repeat.required' => 'Поле пароль является обязательным',
            'password-repeat.same' => 'Пароли не совпадают',

        ];
    }
}
