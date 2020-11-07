<?php


namespace App\Http\Controllers;


use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index(Request $request)
    {
        $documents = Document::orderBy('created_at');
        if($request->text) {
            $documents->where('title', 'ilike', "%$request->text%");
        }
        $documents = $documents->get();
        return view('students.index')->with([
            'documents' => $documents
        ]);
    }
}
