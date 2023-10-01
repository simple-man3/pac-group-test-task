<?php

namespace App\Models\CabinCategory\Actions;

use App\Models\Ship;
use Illuminate\Support\Arr;

class DeleteCabinCategoryAction
{
    public function execute(int $id): void
    {
        Ship::destroy($id);
    }
}
