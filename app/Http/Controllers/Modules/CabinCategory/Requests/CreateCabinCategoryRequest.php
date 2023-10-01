<?php

namespace App\Http\Controllers\Modules\CabinCategory\Requests;

use App\Http\Enums\TypesShipEnum;
use App\Models\Ship\Models\Ship;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class CreateCabinCategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'ship_id' => ['required', 'integer', Rule::exists(Ship::class, 'id')],
            'vendor_code' => ['required', 'string', 'max:10'],
            'title' => ['required', 'string'],
            'type' => ['required', new Enum(TypesShipEnum::class)],
            'description' => ['required', 'string'],
            'photos' => ['array'],
            'photos.*' => ['integer'],
            'ordering' => ['required', 'integer'],
            'state' => ['required', 'boolean'],
        ];
    }
}
