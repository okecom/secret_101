<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Member;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('messages.index', compact('messages'));
    }

    public function create()
    {
        $members = Member::all();
        return view('messages.create', compact('members'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'sender_id' => 'required|exists:members,id',
            'recipient_id' => 'required|exists:members,id',
            'content' => 'required|string',
            'status' => 'required|in:sent,read,deleted',
        ]);

        Message::create($request->all());

        return redirect()->route('messages.index')->with('success', 'Message sent successfully.');
    }

    public function show(Message $message)
    {
        return view('messages.show', compact('message'));
    }

    public function edit(Message $message)
    {
        $members = Member::all();
        return view('messages.edit', compact('message', 'members'));
    }

    public function update(Request $request, Message $message)
    {
        $request->validate([
            'sender_id' => 'required|exists:members,id',
            'recipient_id' => 'required|exists:members,id',
            'content' => 'required|string',
            'status' => 'required|in:sent,read,deleted',
        ]);

        $message->update($request->all());

        return redirect()->route('messages.index')->with('success', 'Message updated successfully.');
    }

    public function destroy(Message $message)
    {
        $message->delete();

        return redirect()->route('messages.index')->with('success', 'Message deleted successfully.');
    }
}
