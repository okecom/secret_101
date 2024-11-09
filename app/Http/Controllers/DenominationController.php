<?php

namespace App\Http\Controllers;

use App\Models\Denomination;
use Illuminate\Http\Request;

class DenominationController extends Controller
{
    public function index()
    {
        return Denomination::all();
    }

    public function create()
    {
        // Optional: return view for creating a denomination (if not using API).
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'nullable|string',
            'religionbase_id' => 'required|exists:religionbase,religionbase_id',
            'status' => 'required|string|in:active,inactive',
        ]);

        return Denomination::create($validatedData);
    }

    public function show(Denomination $denomination)
    {
        return $denomination;
    }

    public function edit(Denomination $denomination)
    {
        // Optional: return view for editing the denomination (if not using API).
    }

    public function update(Request $request, Denomination $denomination)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'nullable|string',
            'religionbase_id' => 'required|exists:religionbase,religionbase_id',
            'status' => 'required|string|in:active,inactive',
        ]);

        $denomination->update($validatedData);
        return $denomination;
    }

    public function destroy(Denomination $denomination)
    {
        $denomination->delete();
        return response()->json(null, 204);
    }
}
