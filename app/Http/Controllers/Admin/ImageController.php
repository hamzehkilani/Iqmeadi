<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Image;
use App\Models\ImagePost;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{


    public function index()
    {
        $services = Service::all();
        $clients = Client::all();

        return view('Admin.Images.show', compact('services', 'clients'));
    }


    public function create()
    {
        $clients = Client::all();

        return view('Admin.Images.add', compact('clients'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg|max:20000',
            'client_id' => 'required'
        ]);

        $clientName = Client::where('id', $request->client_id)->first()->name;

        if ($files = $request->file('image')) {
                $name = $files->getClientOriginalName();
                $file_name = time() . "." . $name;
                $files->move('attachments/clientsImages/' . $clientName . '/', $file_name);
                $image = $file_name;
        }
        Image::create(
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

        $images = Image::where([
            'client_id' => $request->client_id,
        ])->get();
        $clients = Client::all();
        $clientName = Client::where('id', $request->client_id)->first()->name;
        return view('Admin.Images.show', compact('clients', 'clientName','images'));
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
    $image_id=(int)$request->id;
    $imagedata=image::where('id',$image_id)->with('client')->first();
    $clientName = $imagedata->client->name;
    $file_name=$imagedata->image;
    $imagePath = public_path('attachments/clientsImages/' . $clientName . '/'. $file_name);
    if (file::exists($imagePath)) {
        file::delete($imagePath);
        $imagedata->delete();
        return redirect()->route('images.index')->with('success', 'Client images deleted successfully');
    } else {
        return redirect()->back()->with('error', 'Client images directory not found');
    }
    }
}
