<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Client;

class VedioCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $userinfo = Client::find($this->client_id);
        return [
            'video' => $this->video,
            'name' => $userinfo->name,
            'logo' => $userinfo->image,
        ];
    }
}
