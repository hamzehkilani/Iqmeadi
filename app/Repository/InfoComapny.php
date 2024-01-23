<?php

namespace App\Repository;

use App\IRepository\InfoCompanyInterface;
use App\Models\AboutCompany;
use Illuminate\Support\Facades\File;

class InfoComapny implements InfoCompanyInterface
{

    public function index()
    {
        $infos = AboutCompany::all();

        return view('Admin.InfoCompany.Show_info', compact('infos'));
    }

    public function create()
    {
        return view('Admin.InfoCompany.add_info');
    }

    public function store($request)
    {
        try {

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file->storeAs('attachments/InfoCompany/', $file->getClientOriginalName(), 'serviceImage');
            AboutCompany::create([
                'image' => $name,
                'name' => $request->name,
                'description' => $request->description,
            ]);

            toastr()->success('تمت الاضافة بنجاح');
            return redirect()->route('dashboard');
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => $ex->getMessage()]);
        }
    }


    public function edit($id)
    {
    }

    public function update($request)
    {
        if ($request->image) {
            try {

                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                $file->storeAs('attachments/InfoCompany/', $file->getClientOriginalName(), 'serviceImage');
                AboutCompany::where('id', $request->id)->update([
                    'image' => $name,
                    'name' => $request->name,
                    'description' => $request->description,
                ]);

                toastr()->success('تم التعديل بنجاح');
                return redirect()->back();
            } catch (\Exception $ex) {
                return redirect()->back()->with(['error' => $ex->getMessage()]);
            }
        } else {
           
                try {
                    AboutCompany::where('id', $request->id)->update([
                        'name' => $request->name,
                        'description' => $request->description,
                    ]);

                    toastr()->success('تم التعديل بنجاح');
                    return redirect()->back();
                } catch (\Exception $ex) {
                    return redirect()->back()->with(['error' => $ex->getMessage()]);
                }
        }
    }

    public function delete($request)
    {
        $imagedata=AboutCompany::where('id', $request->id)->first();
        $file_name=$imagedata->image;
        $imagePath = public_path('attachments/InfoCompany/' . $file_name);
        if (file::exists($imagePath)) {
            file::delete($imagePath);
            $imagedata->delete();
            return redirect()->back()->with('success', 'Client images deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Client images directory not found');
        }
        }
}
