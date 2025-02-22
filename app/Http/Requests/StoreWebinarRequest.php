<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWebinarRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name'        => 'required',
            'description' => 'nullable',
            'event_date'  => 'required',
        ];
    }
}
