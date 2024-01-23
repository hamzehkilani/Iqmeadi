<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('Admin.User.show_users', compact('users', 'roles'));
    }



    public function create()
    {
        $roles  = Role::all();
        return view('Admin.User.add_user', compact('roles'));
    }


    public function store(Request $request)
    {
        try {
            $request->validate([
                'fname' => 'required|string|min:2|max:10',
                'lname' => 'required|string|min:2|max:10',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8',
                'role_id' => 'required'
            ]);

            User::create([
                'first_name' => $request->fname,
                'last_name' => $request->lname,
                'email' => $request->email,
                'role_id' => $request->role_id,
                'password' => Hash::make($request->password)
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


            if ($request->password) {
                $request->validate([
                    'fname' => 'required|min:2|max:10',
                    'lname' => 'required|string|min:2|max:10',
                    'role_id' => 'required',
                    'password' => 'required|min:8'
                ]);

                User::where('id', $request->id)->update([
                    'first_name' => $request->fname,
                    'last_name' => $request->lname,
                    'role_id' => $request->role_id,
                    'password' => Hash::make($request->password)
                ]);
            } else {
                $request->validate([
                    'fname' => 'required|min:2|max:10',
                    'lname' => 'required|string|min:2|max:10',
                    'role_id' => 'required',
                ]);

                User::where('id', $request->id)->update([
                    'first_name' => $request->fname,
                    'last_name' => $request->lname,
                    'role_id' => $request->role_id,
                ]);
            }

            toastr()->success('تم التعديل  بنجاح');

            return redirect()->back();
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => $ex->getMessage()]);
        }
    }


    public function block($id)
    {
        User::where('id', $id)->update([
            'is_available' => 0
        ]);

        toastr()->success('تم الحظر  بنجاح');

        return redirect()->back();
    }

    public function unBlock($id)
    {
        User::where('id', $id)->update([
            'is_available' => 1
        ]);

        toastr()->success('تم فك الحظر بنجاح');

        return redirect()->back();
    }

    public function destroy($id)
    {
        //
    }
}
