<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\IRepository\InfoCompanyInterface;
use Illuminate\Http\Request;

class InfoCompanyController extends Controller
{

    protected $InfoCompany;

    public function __construct(InfoCompanyInterface $InfoCompany)
    {
        $this->InfoCompany = $InfoCompany;
    }

    public function index()
    {
        return $this->InfoCompany->index();
    }


    public function create()
    {
        return $this->InfoCompany->create();
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg',
            'name' => 'required|string|min:3',
            'description' => 'required'
        ]);

        return $this->InfoCompany->store($request);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request)
    {
        if ($request->image) {
            $request->validate([
                'image' => 'required|mimes:png,jpg,jpeg',
                'name' => 'required|string|min:3',
                'description' => 'required'
            ]);

        } else {
            $request->validate([
                'name' => 'required|string|min:3',
                'description' => 'required'
            ]);

        }
        return $this->InfoCompany->update($request);

    }


    public function destroy(Request $request)
    {
        return $this->InfoCompany->delete($request);
    }
}
