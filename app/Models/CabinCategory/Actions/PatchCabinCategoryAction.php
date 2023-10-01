<?php

namespace App\Models\CabinCategory\Actions;

use App\Models\Ship;
use Illuminate\Support\Arr;

class PatchCabinCategoryAction
{
    public function execute(int $id, array $fields): Ship
    {
        $ship = Ship::findOrFail($id);
        $ship->fill(Arr::only($fields, Ship::FILLABLE));

        $ship->save();

        return $ship;
    }
}
