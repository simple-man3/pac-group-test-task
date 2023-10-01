<?php

namespace App\Models\Ship\Actions;

use App\Models\Ship\Models\Ship;

class GetShipAction
{
    public function execute(int $id): Ship
    {
        return Ship::findOrFail($id);
    }
}
