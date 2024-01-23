<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Service;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{

    public function index()
    {
        $clients = Client::all();
        return view('Admin.Videos.show', compact('clients'));
    }



    public function create()
    {
        $services = Service::all();
        $clients = Client::all();
        return view('Admin.Videos.add', compact('services', 'clients'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'client_id' => 'required',
            'video' => 'required|file|mimes:jpeg,png,gif,mp4,mov', // Adjust the allowed mime types and size as needed
        ]);
    

        $VideoName = time() . '.' . $request->video->getClientOriginalName();

        $request->video->storeAs('assets/Videos/', $VideoName, 'Video');

        Video::create([
            'client_id' => $request->client_id,
            'video' => $VideoName,
        ]);
        return back()
       ->with('success', 'Video has been successfully uploaded.');
    }


    public function filterVideo(Request $request)
    {

        $images = Video::where([
            'client_id' => $request->client_id,
        ])->get();
        $clients = Client::all();
        return view('Admin.Videos.show', compact('clients'))->withDetails($images);
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(Request $request)
    {
        Video::where('id', $request->id)->delete();

        toastr()->success('تم الحذف بنجاح');

        return redirect()->route('video.index   ');
    }
}
