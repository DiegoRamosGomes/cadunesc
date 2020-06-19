<?php


namespace App\Http\Controllers;


use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $contact = new Contact($request->all());
        $contact->save();
        return redirect()->back()->with('message', 'Contato enviado com sucesso!');
    }
}
