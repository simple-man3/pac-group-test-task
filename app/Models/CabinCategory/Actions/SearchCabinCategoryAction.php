<?php

namespace App\Models\CabinCategory\Actions;

use App\Models\CabinCategory\Models\CabinCategory;
use Illuminate\Database\Eloquent\Collection;

class SearchCabinCategoryAction
{
    public function execute(): Collection
    {
        return CabinCategory::query()->all();
    }
}
