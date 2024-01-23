<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $fillable = [
        'location',
        'email',
        'phone',
        'facebook_url',
        'instagram_url',
        'youtube_url'
    ];
}
