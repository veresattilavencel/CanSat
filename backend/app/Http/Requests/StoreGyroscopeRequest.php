<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGyroscopeRequest extends FormRequest
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
            'Time' => ["date", "required"],
            'x_rotation' => ["nullable", "numeric", "between:0,20"],
            'y_rotation' => ["nullable", "numeric", "between:0,20"],
            'z_rotation' => ["nullable", "numeric", "between:0,20"]
        ];
    }
}
