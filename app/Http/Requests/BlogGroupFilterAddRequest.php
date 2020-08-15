<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogGroupFilterAddRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'title' => 'min:4|max:25',
        ];
    }
    public function messages(){
        return [
          'title.min' => 'Минимальное количество символов 4',
          'title.max' => 'Максимальное количество символов 25',
        ];
    }
}
