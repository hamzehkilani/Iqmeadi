<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\SocialMedia as ModelsSocialMedia;
use Illuminate\Http\Request;

class SocialMedia extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        $clients = Client::all();
        return view('Admin.SocialMedia.Add',compact('clients'));
        
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'client_id' => 'required',
            ]); 
      
                ModelsSocialMedia::create([
                  
                    'client_id'=> $request->client_id,
                    'facebook_url' => $request->facebook,
                    'instagram_url' => $request->Instagram,
                    'youtube_url' => $request->Youtube,
                    'twitter_url' => $request->twitter,

                ]);
                toastr()->success('تمت الاضافة بنجاح');

                return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
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

    public function destroy($id)
    {
        //
    }
}
