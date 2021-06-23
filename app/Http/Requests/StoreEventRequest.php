<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreEventRequest extends FormRequest
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
            'visitor_limit' => [
                'required', 'integer',
            ],
            'event_date' => [
                'date_format:Y-m-d', 'required'
            ],
        ];
    }
}