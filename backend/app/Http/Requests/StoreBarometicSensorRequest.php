<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBarometicSensorRequest extends FormRequest
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
            'Time' => ["required", "date"],
            'Pressure' => ["nullable", "numeric", "between:0,100000"],
            'Temperature' => ["nullable", "numeric", "between:0,300"],
            'Altitude' => ["nullable", "numeric", "between:0,2500"]
        ];
    }
}
