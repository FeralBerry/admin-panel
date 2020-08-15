<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminCurrencyAddRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'code' => 'min:3|max:3|string',
        ];
    }
    public function messages(){
        return [
            'code.min' => 'Минимальная длинна 3 символа',
            'code.max' => 'Максимальная длинна 3 символа',
            'code.string' => 'Код должен быть строкой',
        ];
    }
}
