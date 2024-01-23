<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\IRepository\FooterInter;
use Illuminate\Http\Request;

class FooterController extends Controller
{

    protected $footer;
    

    public function __construct(FooterInter $_footer)
    {
        $this->footer = $_footer;
    }

    public function index()
    {
        return $this->footer->index();
    }


    public function create()
    {
        return $this->footer->create();
    }

    public function store(Request $request)
    {
        $request->validate([
            'location' => 'required|string',
            'email' => 'required|email|unique:footers',
            'phone' => 'required|min:9|max:13'
        ]);

        return $this->footer->store($request);
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
            'location' => 'required|string',
            'phone' => 'required|min:9|max:13'
        ]);
        return $this->footer->update($request);
    }


    public function destroy(Request $request)
    {
        return $this->footer->delete($request);
    }
}
