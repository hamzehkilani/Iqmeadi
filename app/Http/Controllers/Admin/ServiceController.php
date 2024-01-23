<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::all();

        return view('Admin.Services.show_services', compact('services'));
    }



    public function create()
    {
        return view('Admin.Services.add_service');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'fullName' => 'required|string|min:2|max:50',
                'image' => 'required|mimes:png,jpg,jif,jpeg'
            ]);
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file->storeAs('attachments/service/', $file->getClientOriginalName(), 'serviceImage');
            Service::create([
                'name' => $request->fullName,
                'image' => $name
            ]);


            toastr()->success('تمت الاضافة بنجاح');
            return redirect()->route('dashboard');
        } catch (\Exception $ex) {
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
        $request->validate([
            'name' => 'required|string|min:3|max:50'
        ]);

        Service::where('id', $request->id)->update([
            'name' => $request->name
        ]);
        toastr()->success('تم التعديل بنجاح');
        return redirect()->route('dashboard');
    }


    public function destroy(Request $request,$id)
    {
        $service_id = Client::where('service_id',$request->id)->pluck('service_id');
        if ($service_id->count() == 0) {

            Service::where('id', $request->id)->delete();
            toastr()->success('تم الحذف بنجاح');
            return redirect()->back();
       
        }else{
            toastr()->error('لا يمكنك حذف الخدمة لوجود عملاء تابعين لها');
            return redirect()->back();
        
        }

     
    }
}
