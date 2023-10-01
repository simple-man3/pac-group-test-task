<?php

namespace App\Models\CabinCategory\Actions;

use App\Models\Ship;
use Illuminate\Support\Arr;

class CreateCabinCategoryAction
{
    public function execute(array $fields): Ship
    {
        $ship = new Ship();
        $ship->fill(Arr::only($fields, Ship::FILLABLE));

        $ship->save();

        return $ship;
    }
}
