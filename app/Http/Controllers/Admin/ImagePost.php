<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\ImagePost as ModelsImagePost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImagePost extends Controller
{

    public function index()
    {
        $clients = Client::all();

        return view('Admin.Posts.show', compact('clients'));
    }


    public function create()
    {
        $clients = Client::all();

        return view('Admin.Posts.add', compact('clients'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg|max:20000',
            'client_id' => 'required'
        ]);

        $clientName = Client::where('id', $request->client_id)->first()->name;

        $files = $request->file('image');
        $name = $files->getClientOriginalName();
        $file_name = time() . "." . $name;
        $files->move('attachments/Posts/' . $clientName . '/', $file_name);
        $image = $file_name;


        ModelsImagePost::create(
            [
                'image' => $image,
                'client_id' => $request->client_id,
            ]
        );
        toastr()->success('تمت الاضافة بنجاح');
        return redirect()->back();
    }



    public function filter(Request $request)
    {
        $images = ModelsImagePost::where([
            'client_id' => $request->client_id,
        ])->get();
        $clients = Client::all();
        $clientName = Client::where('id', $request->client_id)->first()->name;
        return view('Admin.Posts.show', compact('clients', 'clientName', 'images'));
    }

    public function show($id)
    {
        $images = ModelsImagePost::where('client_id', $id)->get();
        $clientName = Client::where('id', $id)->first()->name;
        return view('Posts.ShowPosts', compact('images', 'clientName'));
    }



    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(request $request)
    {
        $image_id = (int) $request->id;
        $imagedatadelte = ModelsImagePost::where('id', $image_id)->first();
        $imagedata = ModelsImagePost::where('id', $image_id)->with('client')->first();
        $clientName = $imagedata->client->name;
        $file_name = $imagedata->image;
        $imagePath = ('attachments/Posts/' . $clientName . '/' . $file_name);
        if (file::exists($imagePath)) {
            file::delete($imagePath);
            $imagedatadelte->delete();
            return redirect()->route('imagePost.index')->with('success', 'Client Posts deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Client images directory not found');
        }

    }
}
