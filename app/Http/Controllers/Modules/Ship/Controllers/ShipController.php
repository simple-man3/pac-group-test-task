<?php

namespace App\Http\Controllers\Modules\Ship\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CabinCategory\Actions\GetCabinCategoryAction;

class ShipController extends Controller
{
    public function get(int $id, GetCabinCategoryAction $action)
    {
        $action->execute($id);
    }
}
