<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'organiser',
        'title',
        'date_event',
        'location',
        'description',
        'limit_visitors',
        'created_at',
        'updated_at',
        'image'
    ];
}
