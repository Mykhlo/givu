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
            'first_name' => 'required|string|max:255',
            "last_name" => 'required|string|max:255',
            "email" => 'required|email|max:255|unique:users',
            "password" => 'required|min:6|max:100',
            "birthday" => 'required|date|max:255|',
            "gender" => 'required|numeric|max:255|',
            "parental_status" => 'required|numeric|max:255|',
            "income" => 'required|numeric|max:255|',
        ];
    }
}
