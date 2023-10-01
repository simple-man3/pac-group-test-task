<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatchShipRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['string'],
            'spec' => ['array'],
            'spec.*.name' => ['string'],
            'spec.*.value' => ['string'],
            'description' => ['string'],
            'ordering' => ['integer', 'max:9999'],
            'state' => ['bool'],
        ];
    }
}
