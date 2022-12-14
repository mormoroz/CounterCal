<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
//            'gender' => 'required|integer|between:0,1',
            'height' => 'required',
            'weight' => 'required',
//            'activity' => 'required',
//            'mission' => 'required',
            'email' => 'required|unique:users|email:rfc',
            'password' => 'required|min:8|max:20',
            'password-repeat' => 'required|same:password'
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
            'gender.required' => 'Поле пол является обязательным',
            'mission.required' => 'Поле цель является обязательным',
            'activity.required' => 'Поле физическая активность является обязательным',
            'email.required' => 'Поле email является обязательным',
            'email.unique' => 'Пользователь с таким адресом электронной почты уже зарегистрирован',
            'email.email' => 'Email должен быть действительным адресом электронной почты',
            'password.required' => 'Поле пароль является обязательным',
            'password.min' => 'Пароль должен быть не менее 8 символов',
            'password.max' => 'Пароль должен быть не более 20 символов',
            'password-repeat.required' => 'Поле пароль является обязательным',
            'password-repeat.same' => 'Пароли не совпадают',

        ];
    }
}
