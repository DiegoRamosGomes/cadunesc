<?php


namespace App\Http\Controllers;


use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::limit(4)->get();
        return view('event')->with([
            'events' => $events
        ]);
    }
}
