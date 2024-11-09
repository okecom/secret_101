<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        return Location::all();
    }

    public function create()
    {
        // Optional: return view for creating a location (if using a web interface).
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'town_name' => 'required|string|max:100',
            'region' => 'nullable|string|max:100',
            'country' => 'required|string|max:100',
            'latitude' => 'nullable|numeric|between:-90,90',
            'longitude' => 'nullable|numeric|between:-180,180',
            'status' => 'required|string|in:active,inactive',
        ]);

        return Location::create($validatedData);
    }

    public function show(Location $location)
    {
        return $location;
    }

    public function edit(Location $location)
    {
        // Optional: return view for editing a location (if using a web interface).
    }

    public function update(Request $request, Location $location)
    {
        $validatedData = $request->validate([
            'town_name' => 'required|string|max:100',
            'region' => 'nullable|string|max:100',
            'country' => 'required|string|max:100',
            'latitude' => 'nullable|numeric|between:-90,90',
            'longitude' => 'nullable|numeric|between:-180,180',
            'status' => 'required|string|in:active,inactive',
        ]);

        $location->update($validatedData);
        return $location;
    }

    public function destroy(Location $location)
    {
        $location->delete();
        return response()->json(null, 204);
    }
}
