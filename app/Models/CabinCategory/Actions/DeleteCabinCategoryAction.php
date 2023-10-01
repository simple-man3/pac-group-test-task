<?php

namespace App\Models\CabinCategory\Actions;

use App\Models\CabinCategory\Models\CabinCategory;

class DeleteCabinCategoryAction
{
    public function execute(int $id): void
    {
        CabinCategory::destroy($id);
    }
}
