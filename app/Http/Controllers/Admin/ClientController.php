<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Service;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index()
    {
        $clients = Client::paginate(3);

        return view('Admin.Clients.show_clients', compact('clients'));
    }

    public function create()
    {
        $services = Service::all();
        return view('Admin.Clients.add_client', compact('services'));
    }


    public function store(Request $request)
    {
        try {
            $request->validate([
                'image' => 'required|mimes:png,jpg,jpeg',
                'name' => 'required|string',
                'email' => 'unique:clients',
                'phone' => 'string|min:9|max:13',
                'location' => 'required|string',
                'duration' => 'required|string',
                'price' => 'numeric|required',
            ]);

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file->storeAs('attachments/clientsImage/', $file->getClientOriginalName(), 'clients');

            Client::create([
                'image' => $name,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'location' => $request->location,
                'duration' => $request->duration,
                'price' => $request->price,
                'note' => $request->note,
            ]);

            toastr()->success('تمت الاضافة بنجاح');

            return redirect()->route('dashboard');
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->back()->with(['error' => $ex->getMessage()]);
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
        if ($request->image) {
            try {

                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                $file->storeAs('attachments/clientsImage/', $file->getClientOriginalName(), 'clients');
                $request->validate([
                    'image' => 'required|mimes:png,jpg,jpeg',
                    'name' => 'required|string',
                    'phone' => 'string|min:9|max:13',
                    'location' => 'required|string',
                    'duration' => 'required|string',
                    'price' => 'numeric|required',

                ]);

                Client::where('id', $request->id)->update([
                    'image' => $name,
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'location' => $request->location,
                    'duration' => $request->duration,
                    'price' => $request->price,
                    'note' => $request->note,
                ]);

                toastr()->success('تم التعديل بنجاح');

                return redirect()->back();
            } catch (\Exception $ex) {
                return redirect()->back()->with(['error' => $ex->getMessage()]);
            }

        } 
        else {

            $request->validate([
                'name' => 'required|string',
                'phone' => 'string|min:9|max:13',
                'location' => 'required|string',
                'duration' => 'required|string',
                'price' => 'numeric|required',

            ]);

            Client::where('id', $request->id)->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'location' => $request->location,
                'duration' => $request->duration,
                'price' => $request->price,
                'note' => $request->note,
            ]);
            
            toastr()->success('تم التعديل بنجاح');
            return redirect()->back();
        }
    }


    public function destroy(Request $request)
    {
        Client::where('id', $request->id)->delete();

        toastr()->success('تم الحذف بنجاح');

        return redirect()->back();
    }
}
