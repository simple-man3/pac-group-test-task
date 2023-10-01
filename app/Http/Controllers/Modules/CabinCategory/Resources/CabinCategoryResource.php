<?php

namespace App\Http\Controllers\Modules\CabinCategory\Resources;

use App\Models\CabinCategory\Models\CabinCategory;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin CabinCategory
 */
class CabinCategoryResource extends JsonResource
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
