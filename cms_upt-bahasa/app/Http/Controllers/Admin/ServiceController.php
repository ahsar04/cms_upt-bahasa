<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use routes\web;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $service = Service::all();
        return view('pages.admin.service.service', compact('service'));
    }
    public function add(){
        return view('pages.admin.service.add');
    }
    public function edit($id_service){
        $service = Service::findorfail($id_service);
        return view('pages.admin.service.edit', compact('service'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_type' => 'required',
            'description_service' => 'required',
        ]);

        Service::create([
            'service_type' => $request->service_type,
            'description_service' => $request->description_service
        ]);

        return redirect('admin/service')->with('toast_success', 'Data Added Successfully');
    }

    public function update(Request $request, $id_service)
    {
        $service = Service::findorfail($id_service);
        $service->update($request->all());
        return redirect('admin/service')->with('toast_success', 'Data Updated Successfully');
    }

    public function destroy($id_service)
    {
        $service = Service::findorfail($id_service);
        $service->delete();
        return back()->with('toast_success', 'Data Deleted Successfully');;
    }
}
