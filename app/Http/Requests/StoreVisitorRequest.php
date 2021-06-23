<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreVisitorRequest extends FormRequest
{
    public function rules()
    {
        return [
            'full_name' => [
                'required', 'string',
            ],
            'email' => [
                'required', 'string',
            ],
            'notes' => [
                'required', 'string',
            ],
        ];
    }
}