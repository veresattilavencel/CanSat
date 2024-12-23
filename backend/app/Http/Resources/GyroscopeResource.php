<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GyroscopeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'Time' => $this->Time,
            'x_rotation' => $this->x_rotation,
            'y_rotation' => $this->y_rotation,
            'z_rotation' => $this->z_rotation
        ];
    }
}
