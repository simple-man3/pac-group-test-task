<?php

namespace App\Models\CabinCategory\Actions;

use App\Models\CabinCategory\Models\CabinCategory;
use Illuminate\Support\Arr;

class CreateCabinCategoryAction
{
    public function execute(array $fields): CabinCategory
    {
        $cabinCategory = new CabinCategory();
        $cabinCategory->fill(Arr::only($fields, CabinCategory::FILLABLE));

        $cabinCategory->save();

        return $cabinCategory;
    }
}
