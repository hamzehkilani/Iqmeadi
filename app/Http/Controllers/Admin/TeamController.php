<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{

    public function index()
    {
        $teams = Team::all();
        return view('Admin.Teams.show_team', compact('teams'));
    }



    public function create()
    {
        return view('Admin.Teams.add_team');
    }


    public function store(Request $request)
    {
        try {
            $request->validate([
                'Name' => 'required|min:3|max:20',
                'position' => 'required|min:3|max:20',
                'image' => 'required|mimes:png,jpg,jpe'
            ]);

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file->storeAs('attachments/team/', $file->getClientOriginalName(), 'TeamImages');

            Team::create([
                'name' => $request->Name,
                'position' => $request->position,
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
        try {
            if ($request->image) {
                $request->validate([
                    'name' => 'required|min:3|max:20',
                    'position' => 'required|min:3|max:20',
                    'image' => 'required|mimes:png,jpg,jpeg'
                ]);

                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                $file->storeAs('attachments/team/', $file->getClientOriginalName(), 'serviceImage');

                // Delete img in server disk
                Storage::disk('TeamImages')->delete('attachments/team/' . $request->file('image2'));

                Team::where('id', $request->id)->update([
                    'name' => $request->name,
                    'position' => $request->position,
                    'image' => $name
                ]);
            } else {
                $request->validate([
                    'name' => 'required|min:3|max:20',
                    'position' => 'required|min:3|max:20',
                ]);


                Team::where('id', $request->id)->update([
                    'name' => $request->name,
                    'position' => $request->position,
                ]);
            }


            toastr()->success('تم التعديل بنجاح');
            return redirect()->route('dashboard');
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => $ex->getMessage()]);
        }
    }


    public function destroy(Request $request, $id)
    {
        Team::where('id', $request->id)->delete();
        toastr()->success('تم التعديل بنجاح');
        return redirect()->route('dashboard');
    }
}
