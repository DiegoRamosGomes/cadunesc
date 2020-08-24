<?php


namespace App\Http\Controllers;


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
        return [
            [
                'id' => '1',
                'name' => 'Evento 1',
                'description' => 'Descricao do evento 1',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR_JFyvU2eGQdS6hx7TQOloUXX3EpC_947U-jWJwF-OdfB2EAQM&usqp=CAU'
            ],
            [
                'id' => '2',
                'name' => 'Evento 2',
                'description' => 'Descricao do evento 2',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR_JFyvU2eGQdS6hx7TQOloUXX3EpC_947U-jWJwF-OdfB2EAQM&usqp=CAU'
            ],
            [
                'id' => '3',
                'name' => 'Evento 3',
                'description' => 'Descricao do evento 3',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR_JFyvU2eGQdS6hx7TQOloUXX3EpC_947U-jWJwF-OdfB2EAQM&usqp=CAU'
            ]
        ];
    }
}
