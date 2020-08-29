<?php


namespace App\Http\Controllers\Api;


use App\Helpers\RequestPaginator;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    use RequestPaginator;

    public function index()
    {
        return $this->rawPagination(Event::query());
    }

    public function store(Request $request)
    {

    }

    public function show(Event $event)
    {
        return $event;
    }

    public function showByDay(Request $request)
    {
        return Event::whereDate('start_at', $request->date)->get();
    }
}
