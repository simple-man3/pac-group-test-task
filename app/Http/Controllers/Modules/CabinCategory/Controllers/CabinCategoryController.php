<?php

namespace App\Http\Controllers\Modules\CabinCategory\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Modules\CabinCategory\Requests\CreateCabinCategoryRequest;
use App\Http\Controllers\Modules\CabinCategory\Requests\PatchCabinCategoryRequest;
use App\Http\Controllers\Modules\CabinCategory\Resources\CabinCategoryResource;
use App\Http\Controllers\Support\Resources\EmptyResource;
use App\Models\CabinCategory\Actions\CreateCabinCategoryAction;
use App\Models\CabinCategory\Actions\DeleteCabinCategoryAction;
use App\Models\CabinCategory\Actions\GetCabinCategoryAction;
use App\Models\CabinCategory\Actions\PatchCabinCategoryAction;
use App\Models\CabinCategory\Actions\SearchCabinCategoryAction;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CabinCategoryController extends Controller
{
    public function get(int $id, GetCabinCategoryAction $action): CabinCategoryResource
    {
        return new CabinCategoryResource($action->execute($id));
    }

    public function create(CreateCabinCategoryRequest $request, CreateCabinCategoryAction $action): CabinCategoryResource
    {
        return new CabinCategoryResource($action->execute($request->validated()));
    }

    public function search(SearchCabinCategoryAction $action): AnonymousResourceCollection
    {
        return CabinCategoryResource::collection($action->execute());
    }

    public function patch(PatchCabinCategoryRequest $request, PatchCabinCategoryAction $action, int $id): CabinCategoryResource
    {
        return new CabinCategoryResource($action->execute($id, $request->validated()));
    }

    public function delete(int $id, DeleteCabinCategoryAction $action): EmptyResource
    {
        $action->execute($id);

        return new EmptyResource();
    }
}
