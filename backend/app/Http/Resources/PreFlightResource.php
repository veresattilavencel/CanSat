<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PreFlightResource extends JsonResource
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
            "accelZ" => $this->accelZ,
            "temperature" => $this->temperature,
            "pressure" => $this->pressure,
            "networkData1" => $this->networkData1,
            "networkData2" => $this->networkData2
        ];
    }
}
