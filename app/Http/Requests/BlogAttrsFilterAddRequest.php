<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogAttrsFilterAddRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'attrs_group_id' => 'integer',
        ];
    }
    public function messages(){
        return [
            'attrs_group_id.integer' => 'ID должно быть цислом',
        ];
    }
}
