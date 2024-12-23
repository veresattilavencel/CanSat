<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSensirionSps30Request extends FormRequest
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
            "Time" => ["required", "date"],
            "pm1_concentration" => ["nullable", "numeric", "between:0,500"],
            "pm2_5_concentration" => ["nullable", "numeric", "between:0,500"],
            "pm10_concentration" => ["nullable", "numeric", "between:0,500"],
            "temperature" => ["nullable", "numeric", "between:0,300"],
            "humidity" => ["nullable", "numeric", "between:0,100"],
            "flow_rate" => ["nullable", "numeric", "between:0,1"]
        ];
    }
}
