<?php


namespace App\Http\Controllers;


use App\Mail\ReceiptEventMail;
use App\Mail\ReceiptManagementMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReceiptController extends Controller
{
    public function event()
    {
        return view('receipt.event');
    }

    public function storeEvent(Request $request)
    {
        Mail::to(config('app.mail'))->send(new ReceiptEventMail($request->email, $request->nameEvent, $request->date, $request->code, $request->peopleName));

        return redirect()->back()->with('message', 'Contato enviado com sucesso!');
    }

    public function storeManagement(Request $request)
    {
        Mail::to(config('app.mail'))->send(new ReceiptManagementMail($request->email, $request->role, $request->year, $request->code, $request->peopleName));

        return redirect()->back()->with('message', 'Contato enviado com sucesso!');
    }

    public function management()
    {
        return view('receipt.management');
    }
}
