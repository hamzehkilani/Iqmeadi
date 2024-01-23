<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sector as ModelsSector;
use Illuminate\Http\Request;

class Sector extends Controller
{

    public function index()
    {
        $sectors = ModelsSector::all();

        return view('Admin.Sectors.show_sectors', compact('sectors'));
    }


    public function create()
    {

        return view('Admin.Sectors.add_sector');
    }


    public function store(Request $request)
    {
        try {
            $request->validate([
                // 'image' => 'required|mimes:png,jpg,jpeg',
                'name' => 'required|string',
            ]);
            // $file = $request->file('image');
            // $name = $file->getClientOriginalName();
            // $file->storeAs('attachments/clientsImage/', $file->getClientOriginalName(), 'clients');

            ModelsSector::create([
                'name' => $request->name,

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
        if ($request->image) {
            try {

                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                $file->storeAs('attachments/SectorImage/', $file->getClientOriginalName(), 'sectors');
                $request->validate([
                    'image' => 'required|mimes:png,jpg,jpeg',
                    'name' => 'required|string',


                ]);

                ModelsSector::where('id', $request->id)->update([
                    'image' => $name,
                    'name' => $request->name,

                ]);

                toastr()->success('تم التعديل بنجاح');

                return redirect()->back();
            } catch (\Exception $ex) {
                return redirect()->back()->with(['error' => $ex->getMessage()]);
            }
            
        } else {

            $request->validate([
                'name' => 'required|string',

            ]);

            ModelsSector::where('id', $request->id)->update([
                'name' => $request->name,
            ]);

            toastr()->success('تم التعديل بنجاح');
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        //
    }
}
