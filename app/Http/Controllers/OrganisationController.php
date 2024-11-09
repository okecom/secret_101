<?php

namespace App\Http\Controllers;

use App\Models\Organisation;
use Illuminate\Http\Request;

class OrganisationController extends Controller
{
    /**
     * Display a listing of the organisations.
     */
    public function index()
    {
        $organisations = Organisation::all();
        return view('organisations.index', compact('organisations'));
    }

    /**
     * Show the form for creating a new organisation.
     */
    public function create()
    {
        return view('organisations.create');
    }

    /**
     * Store a newly created organisation in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'organisation_name' => 'required|string|max:150',
            'denomination_id' => 'required|exists:denominations,id',
            'location_id' => 'required|exists:locations,id',
            'address_line1' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'postal_code' => 'required|string|max:20',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'contact_number' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:100',
            'website' => 'nullable|url|max:255',
            'service_times' => 'nullable|string|max:255',
            'capacity' => 'nullable|integer',
            'founded_year' => 'nullable|integer|min:1800|max:' . now()->year,
            'status' => 'required|in:active,inactive',
        ]);

        $organisation = Organisation::create($request->all());
        return redirect()->route('organisations.index')->with('success', 'Organisation created successfully.');
    }

    /**
     * Display the specified organisation.
     */
    public function show(Organisation $organisation)
    {
        return view('organisations.show', compact('organisation'));
    }

    /**
     * Show the form for editing the specified organisation.
     */
    public function edit(Organisation $organisation)
    {
        return view('organisations.edit', compact('organisation'));
    }

    /**
     * Update the specified organisation in storage.
     */
    public function update(Request $request, Organisation $organisation)
    {
        $request->validate([
            'organisation_name' => 'required|string|max:150',
            'denomination_id' => 'required|exists:denominations,id',
            'location_id' => 'required|exists:locations,id',
            'address_line1' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'postal_code' => 'required|string|max:20',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'contact_number' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:100',
            'website' => 'nullable|url|max:255',
            'service_times' => 'nullable|string|max:255',
            'capacity' => 'nullable|integer',
            'founded_year' => 'nullable|integer|min:1800|max:' . now()->year,
            'status' => 'required|in:active,inactive',
        ]);

        $organisation->update($request->all());
        return redirect()->route('organisations.index')->with('success', 'Organisation updated successfully.');
    }

    /**
     * Remove the specified organisation from storage.
     */
    public function destroy(Organisation $organisation)
    {
        $organisation->delete();
        return redirect()->route('organisations.index')->with('success', 'Organisation deleted successfully.');
    }
}
