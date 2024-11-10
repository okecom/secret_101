<?php

namespace App\Http\Controllers;

use App\Models\ServiceType;
use Illuminate\Http\Request;

class ServiceTypeController extends Controller
{
    public function index()
    {
        $serviceTypes = ServiceType::all();
        return view('service_types.index', compact('serviceTypes'));
    }

    public function create()
    {
        return view('service_types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:service_types|max:255',
            'description' => 'nullable|string',
        ]);

        ServiceType::create($request->all());

        return redirect()->route('service_types.index')->with('success', 'Service Type created successfully.');
    }

    public function show(ServiceType $serviceType)
    {
        return view('service_types.show', compact('serviceType'));
    }

    public function edit(ServiceType $serviceType)
    {
        return view('service_types.edit', compact('serviceType'));
    }

    public function update(Request $request, ServiceType $serviceType)
    {
        $request->validate([
            'name' => 'required|unique:service_types,name,' . $serviceType->id . '|max:255',
            'description' => 'nullable|string',
        ]);

        $serviceType->update($request->all());

        return redirect()->route('service_types.index')->with('success', 'Service Type updated successfully.');
    }

    public function destroy(ServiceType $serviceType)
    {
        $serviceType->delete();

        return redirect()->route('service_types.index')->with('success', 'Service Type deleted successfully.');
    }
}
