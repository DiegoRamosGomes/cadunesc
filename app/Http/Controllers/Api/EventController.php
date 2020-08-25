<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::limit(4)->get();
        return view('event')->with([
            'events' => $events
        ]);
    }

    public function show(Request $request)
    {
        return Event::whereDate('start_at', $request->date)->get();
    }
}
