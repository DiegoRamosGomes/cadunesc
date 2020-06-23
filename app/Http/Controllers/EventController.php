<?php


namespace App\Http\Controllers;


class EventController extends Controller
{
    public function index()
    {
        $events = [];
        return view('event')->with([
            'events' => $events
        ]);
    }
}
