<?php

namespace App\Models\CabinCategory\Actions;

use App\Models\CabinCategory\Models\CabinCategory;
use Illuminate\Support\Arr;

class PatchCabinCategoryAction
{
    public function execute(int $id, array $fields): CabinCategory
    {
        $cabinCategory = CabinCategory::findOrFail($id);
        $cabinCategory->fill(Arr::only($fields, CabinCategory::FILLABLE));

        $cabinCategory->save();

        return $cabinCategory;
    }
}
