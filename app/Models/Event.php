<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'event_type',
        'description',
        'image_path',
        'event_date'
    ];
}