<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => "required|min:3|string",
            'email' => "required|email|unique:admins,email",
            'password' => "required|min:8",
            'age' => "required|integer|between:18,60",
            'phone' => "required|starts_with:01",
            'gender' => "required|in:male,female"
        ];
    }
}
