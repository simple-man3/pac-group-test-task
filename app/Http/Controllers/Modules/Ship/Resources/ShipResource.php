<?php

namespace App\Http\Controllers\Modules\Ship\Resources;

use App\Models\Ship;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Ship
 */
class ShipResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'spec' => $this->spec,
            'description' => $this->description,
            'ordering' => $this->ordering,
            'state' => $this->state,
        ];
    }
}
