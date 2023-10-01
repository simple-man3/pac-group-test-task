<?php

namespace App\Models\Ship\Actions;

use App\Models\Ship\Models\Ship;
use Illuminate\Support\Arr;

class CreateShipAction
{
    public function execute(array $fields): Ship
    {
        $ship = new Ship();
        $ship->fill(Arr::only($fields, Ship::FILLABLE));

        $ship->save();

        return $ship;
    }
}
