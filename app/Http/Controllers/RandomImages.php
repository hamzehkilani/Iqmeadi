<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Image;
use Illuminate\Http\Request;

class RandomImages extends Controller
{
    public function saveImages(){
        $ClientIds = Image::distinct('client_id')->pluck('client_id');
        $images=array();
        foreach($ClientIds as $id){
            $clientName = Client::where('id',$id)->first()->name;
            $image = Image::where('client_id',$id)->first()->image;
            $images[]=$image;
            $image->move(public_path('attachments/randomImages/'), $image);
            }
    }
}
