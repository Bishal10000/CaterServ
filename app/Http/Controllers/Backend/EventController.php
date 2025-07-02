<?php

namespace App\Http\Controllers\Backend;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('event_date', 'desc')->get();
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'event_type' => 'required|in:Wedding,Corporate,Cocktail,Buffet',
            'description' => 'required|string',
            'event_date' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $imagePath = $request->file('image')->store('events', 'public');

        Event::create([
            'title' => $request->title,
            'event_type' => $request->event_type,
            'description' => $request->description,
            'event_date' => $request->event_date,
            'image_path' => $imagePath
        ]);

        return redirect()->route('admin.events.index')->with('success', 'Event added successfully!');
    }

    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'event_type' => 'required|in:Wedding,Corporate,Cocktail,Buffet',
            'description' => 'required|string',
            'event_date' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            if ($event->image_path) {
                Storage::disk('public')->delete($event->image_path);
            }
            $imagePath = $request->file('image')->store('events', 'public');
            $event->image_path = $imagePath;
        }

        $event->update([
            'title' => $request->title,
            'event_type' => $request->event_type,
            'description' => $request->description,
            'event_date' => $request->event_date
        ]);

        return redirect()->route('admin.events.index')->with('success', 'Event updated successfully!');
    }

    public function destroy(Event $event)
    {
        if ($event->image_path) {
            Storage::disk('public')->delete($event->image_path);
        }
        $event->delete();
        return redirect()->route('admin.events.index')->with('success', 'Event deleted successfully!');
    }
}