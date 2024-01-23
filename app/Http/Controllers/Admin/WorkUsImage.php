<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WorkUs;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class WorkUsImage extends Controller
{
  public function index()
  {
    $images=WorkUs::all();
    return view('Admin.workus.showimage',compact('images'));
  }
  public function addindex()
  {
    return view('Admin.workus.addimage');
  }

  public function store(request $request)
  {
    $request->validate([
      'image' => 'required|mimes:png,jpg,jpeg|max:5000',

    ]);
    if ($request->hasFile('image')) {
      $imagename = time() . '.' . $request->image->getClientOriginalName();
      $request->image->storeAs('attachments/Workus', $imagename, 'Workus');
    }
    WorkUs::create([
      'image' => $imagename,
    ]);
    toastr()->success("Image Add Sucessfully");
    return redirect()->back();
  }
  public function Deleteimage($id){
      $workusdelete = workus::where('id',$id)->first();
      $imagefordelete = $workusdelete->image;
      $filePath = public_path('attachments/Workus/' . $imagefordelete);
      if (File::exists($filePath)) {
          File::delete($filePath);
      } else {
          dd("file not exists");
        }
        $workusdelete->delete();
        toastr()->success('Image Delete Sucsessfully');
        return redirect()->back();
  }
}
