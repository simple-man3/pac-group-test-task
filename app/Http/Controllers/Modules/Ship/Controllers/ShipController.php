<?php

namespace App\Http\Controllers\Modules\Ship\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Modules\Ship\Resources\ShipResource;
use App\Http\Controllers\Support\Resources\EmptyResource;
use App\Http\Requests\CreateShipRequest;
use App\Http\Requests\PatchShipRequest;
use App\Models\CabinCategory\Actions\CreateCabinCategoryAction;
use App\Models\CabinCategory\Actions\DeleteCabinCategoryAction;
use App\Models\CabinCategory\Actions\GetCabinCategoryAction;
use App\Models\CabinCategory\Actions\PatchCabinCategoryAction;
use App\Models\CabinCategory\Actions\SearchCabinCategoryAction;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ShipController extends Controller
{
    public function get(int $id, GetCabinCategoryAction $action): ShipResource
    {
        return new ShipResource($action->execute($id));
    }

    public function create(CreateCabinCategoryAction $action, CreateShipRequest $request): ShipResource
    {
        return new ShipResource($action->execute($request->validated()));
    }

    public function search(SearchCabinCategoryAction $action): AnonymousResourceCollection
    {
        return ShipResource::collection($action->execute());
    }

    public function patch(int $id, PatchCabinCategoryAction $action, PatchShipRequest $request): ShipResource
    {
        return new ShipResource($action->execute($id, $request->validated()));
    }

    public function delete(int $id, DeleteCabinCategoryAction $action): EmptyResource
    {
        $action->execute($id);

        return new EmptyResource();
    }
}
