<?php

namespace App\Models\Ship\Actions;

use App\Models\Ship\Models\Ship;

class DeleteShipAction
{
    public function execute(int $id): void
    {
        Ship::destroy($id);
    }
}
