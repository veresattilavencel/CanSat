<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMissionLiveRequest extends FormRequest
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
            "Time" =>["nullable"],
            "x_Coordinates" =>["nullable", "numeric"],
            "y_Coordinates" =>["nullable", "numeric"],
            "pm1_concentration" =>["nullable", "numeric"],
            "pm2_5_concentration" =>["nullable", "numeric"],
            "pm4_concentration" =>["nullable", "numeric"],
            "pm10_concentration" =>["nullable", "numeric"],
            "nc0_5" =>["nullable", "numeric"],
            "nc1_0" =>["nullable", "numeric"],
            "nc2_5" =>["nullable", "numeric"],
            "nc4_0" =>["nullable", "numeric"],
            "nc10_0" =>["nullable", "numeric"],
            "nc10_0" =>["nullable", "numeric"],
            "typycalParticleSize" =>["nullable", "numeric"],
            "accelX" =>["nullable", "numeric"],
            "accelY" =>["nullable", "numeric"],
            "accelZ" =>["nullable", "numeric"],
            "magnetometerX" =>["nullable", "numeric"],
            "magnetometerY" =>["nullable", "numeric"],
            "magnetometerZ" =>["nullable", "numeric"],
            "upperTEMTValue" =>["nullable", "numeric"],
            "bottomTEMTValue" =>["nullable", "numeric"],
            "temperature" =>["nullable", "numeric"],
            "pressure" =>["nullable", "numeric"],
            "networkData1" =>["nullable", "numeric"],
            "networkData2" =>["nullable", "numeric"]
        ];
    }
}
