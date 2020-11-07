<?php


namespace App\Http\Controllers;


use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::whereDate('start_at', '>', now()->firstOfMonth())
            ->whereDate('start_at', '<', now()->lastOfMonth())
            ->get();
        return view('event')->with([
            'events' => $events
        ]);
    }

    public function show(Event $event)
    {
        return view('events.show')->with([
            'event' => $event
        ]);
    }
}
