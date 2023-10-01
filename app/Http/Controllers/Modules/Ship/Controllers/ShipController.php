<?php

namespace App\Http\Controllers\Modules\Ship\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Modules\Ship\Requests\CreateCabinCategoryRequest;
use App\Http\Controllers\Modules\Ship\Requests\PatchCabinCategoryRequest;
use App\Http\Controllers\Modules\Ship\Resources\ShipResource;
use App\Http\Controllers\Support\Resources\EmptyResource;
use App\Models\Ship\Actions\CreateShipAction;
use App\Models\Ship\Actions\DeleteShipAction;
use App\Models\Ship\Actions\GetShipAction;
use App\Models\Ship\Actions\PatchShipAction;
use App\Models\Ship\Actions\SearchShipAction;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ShipController extends Controller
{
    public function get(int $id, GetShipAction $action): ShipResource
    {
        return new ShipResource($action->execute($id));
    }

    public function create(CreateShipAction $action, CreateCabinCategoryRequest $request): ShipResource
    {
        return new ShipResource($action->execute($request->validated()));
    }

    public function search(SearchShipAction $action): AnonymousResourceCollection
    {
        return ShipResource::collection($action->execute());
    }

    public function patch(int $id, PatchShipAction $action, PatchCabinCategoryRequest $request): ShipResource
    {
        return new ShipResource($action->execute($id, $request->validated()));
    }

    public function delete(int $id, DeleteShipAction $action): EmptyResource
    {
        $action->execute($id);

        return new EmptyResource();
    }
}
