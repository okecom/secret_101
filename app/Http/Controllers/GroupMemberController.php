<?php

namespace App\Http\Controllers;

use App\Models\GroupMember;
use Illuminate\Http\Request;

class GroupMemberController extends Controller
{
    /**
     * Display a listing of group members.
     */
    public function index()
    {
        $groupMembers = GroupMember::all();
        return view('group_members.index', compact('groupMembers'));
    }

    /**
     * Show the form for creating a new group member.
     */
    public function create()
    {
        return view('group_members.create');
    }

    /**
     * Store a newly created group member in the database.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'group_id' => 'required|exists:groups,id',
            'member_id' => 'required|exists:members,id',
            'role' => 'nullable|string|max:255',
            'status' => 'required|in:active,inactive',
            'joined_at' => 'nullable|date',
        ]);

        GroupMember::create($validatedData);

        return redirect()->route('group_members.index')->with('success', 'Group member added successfully.');
    }

    /**
     * Display the specified group member.
     */
    public function show(GroupMember $groupMember)
    {
        return view('group_members.show', compact('groupMember'));
    }

    /**
     * Show the form for editing the specified group member.
     */
    public function edit(GroupMember $groupMember)
    {
        return view('group_members.edit', compact('groupMember'));
    }

    /**
     * Update the specified group member in the database.
     */
    public function update(Request $request, GroupMember $groupMember)
    {
        $validatedData = $request->validate([
            'role' => 'nullable|string|max:255',
            'status' => 'required|in:active,inactive',
            'joined_at' => 'nullable|date',
        ]);

        $groupMember->update($validatedData);

        return redirect()->route('group_members.index')->with('success', 'Group member updated successfully.');
    }

    /**
     * Remove the specified group member from the database.
     */
    public function destroy(GroupMember $groupMember)
    {
        $groupMember->delete();
        return redirect()->route('group_members.index')->with('success', 'Group member removed successfully.');
    }
}
