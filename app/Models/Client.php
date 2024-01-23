<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'location',
        'duration',
        'price',
        'note',
        'image',
        'sector_id',
        'id',
    ];


    public function service(){
        return $this->belongsTo(Service::class, 'service_id');
    }
}
