<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view('admin.pages.service.index', compact('services'));
    }

    public function create()
    {
        return view('admin.pages.service.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_type' => 'required|string|max:255',
            'electric' => 'nullable|numeric',
            'water' => 'nullable|numeric',
            'garbage' => 'nullable|numeric',
            'wifi' => 'nullable|numeric',
            'other' => 'nullable|numeric',
        ]);

        Service::create($request->all());
        return redirect()->route('service.list')->with('success', 'Dịch vụ đã được tạo thành công!');
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);
        return response()->json($service);
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.pages.service.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'service_type' => 'required|string|max:255',
            'electric' => 'nullable|numeric',
            'water' => 'nullable|numeric',
            'garbage' => 'nullable|numeric',
            'wifi' => 'nullable|numeric',
            'other' => 'nullable|numeric',
        ]);

        $service = Service::findOrFail($id);
        $service->update($request->all());

        return redirect()->route('service.list')->with('success', 'Dịch vụ đã được cập nhật thành công!');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete(); // Thực hiện xóa dịch vụ

        return redirect()->route('service.list')->with('success', 'Dịch vụ đã được xóa thành công!');
    }
}
