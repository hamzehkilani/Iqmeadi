<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'facebook_url',
        'instagram_url',
        'twitter_url',
        'youtube_url',
        'client_id'
    ];

    public function client(){
        return $this->belongsTo(Client::class,'client_id');
    }
}
