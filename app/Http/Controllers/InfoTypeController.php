<?php

namespace App\Http\Controllers;

use App\Models\InfoType;
use Illuminate\Http\Request;

class InfoTypeController extends Controller
{
    public function index()
    {
        $infoTypes = InfoType::all();
        return view('infotype.index', compact('infoTypes'));
    }

    public function create()
    {
        return view('infotype.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:info_types,name',
            'description' => 'nullable|string',
            'status' => 'boolean',
        ]);

        InfoType::create($request->all());

        return redirect()->route('infotype.index')->with('success', 'InfoType created successfully.');
    }

    // Additional methods for show, edit, update, destroy as generated by Laravel
}