<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateEventRequest extends FormRequest
{
    public function rules()
    {
        return [
            'description' => [
                'required', 'string',
            ],
            'organiser' => [
                'required', 'string',
            ],
            'title' => [
                'required', 'string',
            ],
            'location' => [
                'required', 'string',
            ],
            'limit_visitors' => [
                'required', 'integer',
            ],
            // 'image' => [
            //     'string',
            // ],
            'date_event' => [
                'date_format:Y-m-d', 'required'
            ],
        ];
    }
}