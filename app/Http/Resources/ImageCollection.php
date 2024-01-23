<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Client;
class ImageCollection extends JsonResource
{
    public function toArray($request)
    {
        $userinfo = Client::find($this->client_id);
        $decodedImage = json_decode($this->image, true);
                return [
                    'image' => $decodedImage,
                    'name' => $userinfo->name,
                    'logo' => $userinfo->image,
                ];
    }
}

