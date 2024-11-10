<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index()
    {
        $infos = Info::all();
        return view('info.index', compact('infos'));
    }

    public function create()
    {
        return view('info.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'group_id' => 'required|exists:groups,id',
            'info_type_id' => 'required|exists:info_types,id',
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'status' => 'boolean',
        ]);

        Info::create($request->all());

        return redirect()->route('info.index')->with('success', 'Info created successfully.');
    }

    public function show(Info $info)
    {
        return view('info.show', compact('info'));
    }

    public function edit(Info $info)
    {
        return view('info.edit', compact('info'));
    }

    public function update(Request $request, Info $info)
    {
        $request->validate([
            'group_id' => 'required|exists:groups,id',
            'info_type_id' => 'required|exists:info_types,id',
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'status' => 'boolean',
        ]);

        $info->update($request->all());

        return redirect()->route('info.index')->with('success', 'Info updated successfully.');
    }

    public function destroy(Info $info)
    {
        $info->delete();

        return redirect()->route('info.index')->with('success', 'Info deleted successfully.');
    }
}
