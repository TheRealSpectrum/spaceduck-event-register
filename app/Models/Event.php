<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table="events";
    protected $fillable=['organiser', 'title', 'date_event', 'location', 'description', 'limit_visitors', 'created_at', 'updated_at'];
}
