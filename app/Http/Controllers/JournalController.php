<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class JournalController extends Controller
{
    public function index(Request $request)
    {
        return view('journal.index');
    }

    public function getDocument()
    {
        $pdfContent = Storage::get('jornal.pdf');

        return Response::make($pdfContent, 200, [
            'Content-Type'        => 'application/pdf',
            'Content-Disposition' => 'inline; filename="teste.pdf"'
        ]);
    }
}
