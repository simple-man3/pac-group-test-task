<?php

namespace App\Models\Ship\Actions;

use App\Models\Ship\Models\Ship;
use Illuminate\Support\Arr;

class PatchShipAction
{
    public function execute(int $id, array $fields): Ship
    {
        $ship = Ship::findOrFail($id);
        $ship->fill(Arr::only($fields, Ship::FILLABLE));

        $ship->save();

        return $ship;
    }
}
