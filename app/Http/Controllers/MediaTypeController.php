<?php

namespace App\Http\Controllers;

use App\Models\MediaType;
use Illuminate\Http\Request;

class MediaTypeController extends Controller
{
    public function index()
    {
        $mediaTypes = MediaType::all();
        return view('media_types.index', compact('mediaTypes'));
    }

    public function create()
    {
        return view('media_types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:media_types|max:255',
            'description' => 'nullable|string',
        ]);

        MediaType::create($request->all());

        return redirect()->route('media_types.index')->with('success', 'Media Type created successfully.');
    }

    public function show(MediaType $mediaType)
    {
        return view('media_types.show', compact('mediaType'));
    }

    public function edit(MediaType $mediaType)
    {
        return view('media_types.edit', compact('mediaType'));
    }

    public function update(Request $request, MediaType $mediaType)
    {
        $request->validate([
            'name' => 'required|unique:media_types,name,' . $mediaType->id . '|max:255',
            'description' => 'nullable|string',
        ]);

        $mediaType->update($request->all());

        return redirect()->route('media_types.index')->with('success', 'Media Type updated successfully.');
    }

    public function destroy(MediaType $mediaType)
    {
        $mediaType->delete();

        return redirect()->route('media_types.index')->with('success', 'Media Type deleted successfully.');
    }
}
