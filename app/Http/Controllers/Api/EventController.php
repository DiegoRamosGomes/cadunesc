<?php


namespace App\Http\Controllers\Api;


use App\Helpers\RequestPaginator;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    use RequestPaginator;

    public function index()
    {
        return $this->rawPagination(Event::query());
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            'description' => 'required|max:400',
            "file" => "required|mimes:jpeg,jpg,png"
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }

        $event = Event::updateOrCreate($request->except(['api_token', 'file']));

        if($request->hasFile('file')) {
            if ($event->image) {
                Storage::delete($event->image);
            }
            $event->image = Storage::put("public/events", $request->file('file'));
            $event->save();
        }

        return $event;
    }

    public function show(Event $event)
    {
        return $event;
    }

    public function showByDay(Request $request)
    {
        return Event::whereDate('start_at', $request->date)->get();
    }

    public function update(Request $request, Event $event)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            'description' => 'required|max:400'
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }

        $event->update($request->all());
        return $event;
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return response('', 204);
    }
}
