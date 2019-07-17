<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRegistration extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',            
            "email" => 'required|email|max:255|unique:users',
            "password" => 'required|confirmed|min:6|max:100',
            "birthday" => 'required|date|max:255|',
            "gender" => 'required|numeric|max:255|',
            "parental_status" => 'nullable|numeric|max:255|',
            "income" => 'nullable|numeric|max:999999999|',
            "languages" => 'array|max:255|',
            "languages.*" => 'distinct|numeric|max:255|', 
            "education" => 'nullable|numeric|max:255|',
            "target_checkboxes" => 'array|max:255|', 
            "target_checkboxes.*" => 'distinct|numeric|max:255|', 
        ];
    }
}
