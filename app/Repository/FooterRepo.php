<?php

namespace App\Repository;

use App\IRepository\FooterInter;
use App\Models\Footer;

class FooterRepo implements FooterInter
{

    public function index()
    {
        $footers = Footer::all();
        return view('Admin.Footer.show_footer', compact('footers'));
    }

    public function create()
    {
        return view('Admin.Footer.add_footer');
    }

    public function store($request)
    {
        try {

            if (Footer::all()->count() > 0) {

                toastr()->error('Footer  لايمكن اضافة اكثر من ');

                return redirect()->back();
            } else {
                Footer::create([
                    'location' => $request->location,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'facebook_url' => $request->facebook,
                    'instagram_url' => $request->Instagram,
                    'youtube_url' => $request->Youtube
                ]);
                toastr()->success('تمت الاضافة بنجاح');

                return redirect()->back();
            }
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
    }

    public function update($request)
    {
        try {
            Footer::where('id', $request->id)->update([
                'location' => $request->location,
                'email' => $request->email,
                'phone' => $request->phone,
                'facebook_url' => $request->facebook,
                'instagram_url' => $request->Instagram,
                'youtube_url' => $request->Youtube
            ]);

            toastr()->success('تم التعديل بنجاح');

            return redirect()->back();
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => $ex->getMessage()]);
        }
    }

    public function delete($request)
    {
        Footer::where('id', $request->id)->delete();
        toastr()->success('تم الحذف بنجاح');
        return redirect()->back();
    }
}
