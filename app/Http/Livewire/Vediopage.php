<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;
use Livewire\WithFileUploads;
use App\Models\Video;
use Illuminate\Validation\ValidationException;


class Vediopage extends Component
{

    use WithFileUploads;
    
public $clients;

public $client_id;
public $media;



public function createvedio(){

  dd($this->media);
        $this->validate([
            'client_id' => 'required',
            'video' => 'required|file|mimetypes:video/mp4|max:12288', // Maximum size in kilobytes (12MB)

        ]);
        $VideoName = time() . '.' . $this->video->getClientOriginalName();
        $this->video->storeAs('assets/Videos/', $VideoName, 'Video');
    
        Video::create([
            'client_id' => $this->client_id,
            'video' => $VideoName,
        ]);
    
  


}


    public function render()
    {
        $this->clients=Client::all();
        return view('livewire.vediopage');
    }
}
