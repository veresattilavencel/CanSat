<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SensirionSps30Resource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            "Time" => $this->Time,
            "pm1_concentration" => $this->pm1_concentration,
            "pm2_5_concentration" => $this->pm2_5_concentration,
            "pm10_concentration" => $this->pm10_concentration,
            "temperature" => $this->temperature,
            "humidity" => $this->humidity,
            "flow_rate" => $this->flow_rate
        ];
    }
}
