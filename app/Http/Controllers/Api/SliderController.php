<?php


namespace App\Http\Controllers\Api;


use App\Helpers\RequestPaginator;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    use RequestPaginator;

    public function index()
    {
        return $this->rawPagination(Slider::query());
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'caption' => 'required',
            "file" => "required|mimes:jpeg,jpg,png",
            'action_url' => 'required'
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }

        $slide = Slider::updateOrCreate($request->except(['api_token', 'file']));

        if($request->hasFile('file')) {
            if ($slide->image) {
                Storage::delete($slide->image);
            }
            $slide->url = Storage::put("public/documents", $request->file('file'));
            $slide->save();
        }

        return $slide;
    }

    public function destroy($slider)
    {
        Slider::where('id', $slider)->delete();
        return response('', 204);
    }
}
