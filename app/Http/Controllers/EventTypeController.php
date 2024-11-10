<?php

namespace App\Http\Controllers;

use App\Models\EventType;
use Illuminate\Http\Request;

class EventTypeController extends Controller
{
    public function index()
    {
        $eventTypes = EventType::all();
        return view('event_types.index', compact('eventTypes'));
    }

    public function create()
    {
        return view('event_types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:event_types|max:255',
            'description' => 'nullable|string',
        ]);

        EventType::create($request->all());

        return redirect()->route('event_types.index')->with('success', 'Event Type created successfully.');
    }

    public function show(EventType $eventType)
    {
        return view('event_types.show', compact('eventType'));
    }

    public function edit(EventType $eventType)
    {
        return view('event_types.edit', compact('eventType'));
    }

    public function update(Request $request, EventType $eventType)
    {
        $request->validate([
            'name' => 'required|unique:event_types,name,' . $eventType->id . '|max:255',
            'description' => 'nullable|string',
        ]);

        $eventType->update($request->all());

        return redirect()->route('event_types.index')->with('success', 'Event Type updated successfully.');
    }

    public function destroy(EventType $eventType)
    {
        $eventType->delete();

        return redirect()->route('event_types.index')->with('success', 'Event Type deleted successfully.');
    }
}
