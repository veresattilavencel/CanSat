<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BarometicSensorResource extends JsonResource
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
            'Time' => $this->Time,
            'Pressure' => $this->Pressure,
            'Temperature' => $this->Temperature,
            'Altitude' => $this->Altitude
        ]; 
    }
}
