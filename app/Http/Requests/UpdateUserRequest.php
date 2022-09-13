<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'address.street' => 'required|min:5|max:100',
            'address.street_number' => 'required|min:1|max:5',
            'address.home_number' => 'required|min:1|max:5',
            'address.city' => 'required|max:100',
            'address.zip_code' => 'required|min:6|max:6'
        ];
    }

    public function messages()
    {
        return [
            'address.street.required' => 'Pole :attribute jest wymagane',
            'address.street_number.required' => 'Pole :attribute jest wymagane',
            'address.home_number.required' => 'Pole :attribute jest wymagane',
            'address.city.required' => 'Pole :attribute jest wymagane',
            'address.zip_code' => 'Pole :attribute jest wymagane',
        ];
    }

    public function attributes()
    {
        return [
            'address.street' => 'Ulica',
            'address.street_number' => 'Numer ulicy',
            'address.home_number' => 'Numer domu',
            'address.city' => 'Miasto',
            'address.zip_code' => 'Kod pocztowy',
        ];
    }
}
