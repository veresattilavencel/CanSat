<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PowerSavingResource extends JsonResource
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
            "networkData1" => $this->networkData1,
            "networkData2" => $this->networkData2
        ];
    }
}
