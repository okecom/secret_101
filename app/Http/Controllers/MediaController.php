<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index()
    {
        $media = Media::all();
        return view('media.index', compact('media'));
    }

    public function create()
    {
        return view('media.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'group_id' => 'required|exists:groups,id',
            'media_type_id' => 'required|exists:media_types,id',
            'title' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'boolean',
        ]);

        Media::create($request->all());

        return redirect()->route('media.index')->with('success', 'Media item created successfully.');
    }

    public function show(Media $media)
    {
        return view('media.show', compact('media'));
    }

    public function edit(Media $media)
    {
        return view('media.edit', compact('media'));
    }

    public function update(Request $request, Media $media)
    {
        $request->validate([
            'group_id' => 'required|exists:groups,id',
            'media_type_id' => 'required|exists:media_types,id',
            'title' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'boolean',
        ]);

        $media->update($request->all());

        return redirect()->route('media.index')->with('success', 'Media item updated successfully.');
    }

    public function destroy(Media $media)
    {
        $media->delete();

        return redirect()->route('media.index')->with('success', 'Media item deleted successfully.');
    }
}
