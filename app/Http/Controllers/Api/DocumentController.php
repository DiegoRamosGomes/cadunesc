<?php


namespace App\Http\Controllers\Api;


use App\Helpers\RequestPaginator;
use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DocumentController extends Controller
{
    use RequestPaginator;

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            "file" => "required|mimetypes:application/pdf"
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }

        $document = Document::updateOrCreate($request->except(['api_token', 'file']));

        if($request->hasFile('file')) {
            if ($document->url) {
                Storage::delete($document->url);
            }
            $document->url = Storage::put("public/documents", $request->file('file'));
            $document->save();
        }

        return $document;
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
