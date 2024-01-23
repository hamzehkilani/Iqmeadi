<?php

namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Image;
use App\Models\Video;
use Illuminate\Http\Request;

class ClientController extends Controller
{


    public function index()
    {
        $clients = Client::all();
        return view('Clients.clients', compact('clients'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $clientName = Client::where('id', $id)->first()->name;
        return view('Clients.show', compact('id', 'clientName'));
    }



    public function showPhotos($id)
    {
        $images = Image::where('client_id', $id)->get();
        $clientName = Client::where('id', $id)->first()->name;
        return view('Clients.ShowPhotos', compact('images', 'clientName'));
    }



    public function showReels($id)
    {
        $reels = Video::where('client_id', $id)->get();
        $clientName = Client::where('id', $id)->first()->name;
        return view('Clients.ShowReels', compact('reels','clientName'));
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
