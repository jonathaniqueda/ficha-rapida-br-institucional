<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $values;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($values)
    {
        $this->values = $values;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.contact')
            ->subject($this->values['subject'])
            ->with([
                'name' => $this->values['name'],
                'email' => $this->values['email'],
                'cel' => $this->values['cel'],
                'msg' => $this->values['msg'],
            ]);
    }
}
