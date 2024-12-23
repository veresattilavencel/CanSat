<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGPSRequest extends FormRequest
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
            'Latitude' => ["nullable", "numeric", "between:-180,180"],
            'Longitude' => ["nullable", "numeric", "between:-180,180"],
            'HeightAboveSeaLevel' => ["nullable", "numeric", "between:0,2500"],
            'SpeedAboveGround' => ["nullable", "numeric", "between:0,30"]
        ];
    }
}
