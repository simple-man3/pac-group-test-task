<?php

namespace App\Models\CabinCategory\Actions;

use App\Models\Ship;

class GetCabinCategoryAction
{
    public function execute(int $id): Ship
    {
        return Ship::findOrFail($id);
    }
}
