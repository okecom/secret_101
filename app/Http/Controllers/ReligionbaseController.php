<?php

namespace App\Http\Controllers;

use App\Models\Religionbase;
use Illuminate\Http\Request;

class ReligionbaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Religionbase::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return a view for creating a new religion (if applicable)
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'nullable|string',
            'origin_region' => 'nullable|string|max:50',
            'founding_period' => 'nullable|string|max:50',
            'founder_name' => 'nullable|string|max:100',
            'sacred_texts' => 'nullable|string',
            'primary_celebrations' => 'nullable|string',
            'followers_estimate' => 'nullable|integer',
            'official_website' => 'nullable|string|max:255',
            'status' => 'required|string|in:active,inactive',
        ]);

        return Religionbase::create($validatedData);
    }

    /**
     * Display the specified resource.
     */
    public function show(Religionbase $religionbase)
    {
        return $religionbase;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Religionbase $religionbase)
    {
        // Return a view for editing the religion (if applicable)
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Religionbase $religionbase)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'nullable|string',
            'origin_region' => 'nullable|string|max:50',
            'founding_period' => 'nullable|string|max:50',
            'founder_name' => 'nullable|string|max:100',
            'sacred_texts' => 'nullable|string',
            'primary_celebrations' => 'nullable|string',
            'followers_estimate' => 'nullable|integer',
            'official_website' => 'nullable|string|max:255',
            'status' => 'required|string|in:active,inactive',
        ]);

        $religionbase->update($validatedData);
        return $religionbase;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Religionbase $religionbase)
    {
        $religionbase->delete();
        return response()->json(null, 204);
    }
}
