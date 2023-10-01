<?php

namespace App\Models\CabinCategory\Actions;

use App\Models\CabinCategory\Models\CabinCategory;

class GetCabinCategoryAction
{
    public function execute(int $id): CabinCategory
    {
        return CabinCategory::findOrFail($id);
    }
}
