<?php

namespace App\Http\Controllers\Modules\CabinCategory\Requests;

use App\Http\Enums\TypesShipEnum;
use App\Models\Ship\Models\Ship;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class PatchCabinCategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'ship_id' => ['integer', Rule::exists(Ship::class, 'id')],
            'vendor_code' => ['string', 'max:10'],
            'title' => ['string'],
            'type' => [new Enum(TypesShipEnum::class)],
            'description' => ['string'],
            'photos' => ['array'],
            'photos.*' => ['integer'],
            'ordering' => ['integer'],
            'state' => ['boolean'],
        ];
    }
}
