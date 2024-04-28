<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantDetailsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:4|unique:restaurants,name',
            'phone_number' => 'required|regex:/^09[0-9]{9}$/|unique:restaurants,phone_number',
            'address' => 'required',
            'account_number' => 'required|min:6',
        ];
    }
}
