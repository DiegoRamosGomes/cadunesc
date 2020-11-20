<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReceiptManagementMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $role;
    public $year;
    public $code;
    public $peopleName;

    /**
     * Create a new message instance.
     *
     * @param $email
     * @param $role
     * @param $year
     * @param $code
     * @param $peopleName
     */
    public function __construct($email, $role, $year, $code, $peopleName)
    {
        $this->email = $email;
        $this->role = $role;
        $this->year = $year;
        $this->code = $code;
        $this->peopleName = $peopleName;
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
            ->view('mails.receipt.management');
    }
}
