<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'website_title',
        'slogan',
        'logo_top',
        'logo_bottom',
        'favicon',
        'address',
        'phone',
        'email',
        'facebook',
        'twitter',
        'youtube',
        'linkedin',
        'instagram',
        'google_map',
        'created_by',
        'updated_by'
    ];

    // Relationship to creator user
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // Relationship to updater user
    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}