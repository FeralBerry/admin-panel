<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminProductsCreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'title' => 'required|min:3|max:100|string',
            'category_id' => 'integer',
            'price' => 'required',
        ];
    }
    public function messages(){
        return [
            'category_id.integer' => 'Категория должна быть цифрой',
            'price.required' => 'Цена обязательна для заполнения',
            'title.min' => 'Название товара минимум 3 символа',
        ];
    }
}
