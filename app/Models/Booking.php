<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'country',
        'city',
        'venue',
        'event_type',
        'guest_count',
        'event_date',
        'vegetarian_option',
        'contact_number',
        'email'
    ];
}