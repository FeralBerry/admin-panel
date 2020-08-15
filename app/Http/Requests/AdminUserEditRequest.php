<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUserEditRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $id = $_POST['id'];
        return [
          'name' => 'required|min:3|max:20|string',
          'email' => [
              'required',
              'string',
              'email',
              'max:255',
              \Illuminate\Validation\Rule::unique('users')->ignore($id),
          ],
            'password' => 'nullable|string|min:8|max|20|confirmed',
        ];
    }
    public function messages(){
        return [
            'login.min' => 'Минимальная длина логина 3 символа',
            'email.unique' => 'Такой email уже существует',
            'password.confirmed' => 'Пароли не совпадают',
        ];
    }
}
