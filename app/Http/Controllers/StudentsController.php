<?php


namespace App\Http\Controllers;


use App\Models\Document;

class StudentsController extends Controller
{
    public function index()
    {
        $documents = Document::orderBy('created_at')->get();
        return view('students.index')->with([
            'documents' => $documents
        ]);
    }
}
