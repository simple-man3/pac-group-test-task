<?php

namespace App\Models\Ship\Actions;

use App\Models\Ship\Models\Ship;
use Illuminate\Database\Eloquent\Collection;

class SearchShipAction
{
    public function execute(): Collection
    {
        return Ship::query()->all();
    }
}
