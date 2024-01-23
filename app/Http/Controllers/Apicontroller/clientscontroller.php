<?php

namespace App\Http\Controllers\Apicontroller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Image;
use App\Models\WorkUs;
use App\Models\Video;
use App\Http\Resources\ImageCollection;
use App\Http\Resources\VedioCollection;
use App\Http\Resources\RanodmImages;

class clientscontroller extends Controller
{
    public function getClient()
    {
        $clients = Client::all();
        return response()->json(['clients' => $clients, 'message' => 'ok', 'status' => 200]);
    }
    public function getClientImage($clientId)
    {
        $images = Image::where('client_id', $clientId)->get();
        $transformedImages = ImageCollection::collection($images);
        return response()->json(['data' => $transformedImages, 'message' => 'ok', 'status' => 200]);
    }

    public function getClientVedio($clientId)
    {
        $videos = Video::where('client_id', $clientId)->get();
        $transformedVedio =  VedioCollection::collection($videos);
        return response()->json(['data' => $transformedVedio, 'message' => 'ok', 'status' => 200]);
    }
    public function getRandomImage()
    {
        $Work_Us =WorkUs::InRandomOrder()->limit(10)->get();
        return response()->json(['data' =>   RanodmImages::collection($Work_Us), 'message' => 'ok', 'status' => 200]);
    }
}

