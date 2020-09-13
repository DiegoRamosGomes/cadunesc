<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'caption' => 'required',
            'image' => 'required',
            'action_url' => 'required'
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }

        return Slider::updateOrCreate($request->except('api_token'));
    }

    public function destroy($slider)
    {
        Slider::where('id', $slider)->delete();
        return response('', 204);
    }
}
