<?php


namespace App\Http\Controllers;


use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $contact = new Contact;
        $contact->fill($request->except('_token'));
        $contact->save();

        Mail::to(config('app.mail'))->send(new ContactMail($request->email, $request->subject, $request->text));

        return redirect()->back()->with('message', 'Contato enviado com sucesso!');
    }
}
