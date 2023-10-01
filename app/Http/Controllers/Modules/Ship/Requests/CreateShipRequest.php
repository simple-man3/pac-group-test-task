<?php

namespace App\Http\Controllers\Modules\Ship\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateShipRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'spec' => ['required', 'array'],
            'spec.*.name' => ['required', 'string'],
            'spec.*.value' => ['required', 'string'],
            'description' => ['required', 'string'],
            'ordering' => ['required', 'integer', 'max:9999'],
            'state' => ['required', 'bool'],
        ];
    }
}
