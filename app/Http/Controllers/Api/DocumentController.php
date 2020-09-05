<?php


namespace App\Http\Controllers\Api;


use App\Helpers\RequestPaginator;
use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DocumentController extends Controller
{
    use RequestPaginator;

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'url' => 'required',
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }

        return Document::updateOrCreate($request->except(['api_token']));
    }

    public function destroy($document)
    {
        Document::where('id', $document)->delete();
        return response('', 204);
    }

    public function index()
    {
        return $this->rawPagination(Document::query());
    }
}
