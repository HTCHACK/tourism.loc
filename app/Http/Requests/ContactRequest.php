<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'phone_number' => 'required|min:17',
            'name' => 'required|min:5',
            'message' => 'required|min:15|max:250',
        ];
    }
}

