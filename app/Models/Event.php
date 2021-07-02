<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Visitor;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [

        'organiser',
        'title',
        'event_date',
        'location',
        'description',
        'visitor_limit',
        'visitor_count',
        'created_at',
        'updated_at'
    ];

    public function Visitors(): HasMany
    {
        return $this->hasMany(Visitor::class);
    }
}
