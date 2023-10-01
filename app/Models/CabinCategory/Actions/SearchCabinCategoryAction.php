<?php

namespace App\Models\CabinCategory\Actions;

use App\Models\Ship;
use Illuminate\Database\Eloquent\Collection;

class SearchCabinCategoryAction
{
    public function execute(): Collection
    {
        return Ship::query()->all();
    }
}
