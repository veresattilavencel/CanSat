<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePowerSavingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "Time" => "nullable",
            "x_Coordinates" => "nullable|numeric",
            "y_Coordinates" => "nullable|numeric",
            "networkData1" => "nullable|numeric",
            "networkData2" => "nullable|numeric"
        ];
    }
}
