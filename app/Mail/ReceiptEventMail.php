<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReceiptEventMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $event;
    public $date;
    public $code;
    public $name;

    /**
     * Create a new message instance.
     *
     * @param $email
     * @param $event
     * @param $date
     * @param $code
     * @param $name
     */
    public function __construct($email, $event, $date, $code, $name)
    {
        $this->email = $email;
        $this->event = $event;
        $this->date = $date;
        $this->code = $code;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('app.mail'))
            ->subject('Solicitação de comprovante')
            ->view('mails.receipt.event');
    }
}
