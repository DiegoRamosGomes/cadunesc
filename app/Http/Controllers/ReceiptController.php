<?php


namespace App\Http\Controllers;


class ReceiptController extends Controller
{
    public function event()
    {
        return view('receipt.event');
    }

    public function management()
    {
        return view('receipt.management');
    }
}
