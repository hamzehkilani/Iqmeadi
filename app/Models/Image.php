<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'service_id',
        'client_id',
        'image'
    ];

    public function client(){
        return $this->belongsTo(Client::class,'client_id');
    }

    public function service(){
        return $this->belongsTo(Service::class,'service_id');
    }
}


