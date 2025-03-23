<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MissionLiveResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "Time" => $this->Time,
            "x_Coordinates" => $this->x_Coordinates,
            "y_Coordinates" => $this->y_Coordinates,
            "pm1_concentration" => $this->pm1_concentration,
            "pm2_5_concentration" => $this->pm2_5_concentration,
            "pm4_concentration" => $this->pm4_concentration,
            "pm10_concentration" => $this->pm10_concentration,
            "nc0_5" => $this->nc0_5,
            "nc1_0" => $this->nc1_0,
            "nc2_5" => $this->nc2_5,
            "nc4_0" => $this->nc4_0,
            "nc10_0" => $this->nc10_0,
            "typycalParticleSize" => $this->typycalParticleSize,
            "accelX" => $this->accelX,
            "accelY" => $this->accelY,
            "accelZ" => $this->accelZ,
            "magnetometerX" => $this->magnetometerX,
            "magnetometerY" => $this->magnetometerY,
            "magnetometerZ" => $this->magnetometerZ,
            "upperTEMTValue" => $this->upperTEMTValue,
            "bottomTEMTValue" => $this->bottomTEMTValue,
            "temperature" => $this->temperature,
            "pressure" => $this->pressure,
            "altitude" => $this->altitude,
            "networkData1" => $this->networkData1,
            "networkData2" => $this->networkData2,
            ];
    }
}
