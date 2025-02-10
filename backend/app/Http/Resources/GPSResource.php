<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GPSResource extends JsonResource
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
            'Latitude' => $this->Latitude,
            'Longitude' => $this->Longitude,
            'HeightAboveSeaLevel' => $this->HeightAboveSeaLevel,
            'SpeedAboveGround' => $this->SpeedAboveGround
        ];
    }
}
