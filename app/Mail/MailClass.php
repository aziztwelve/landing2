<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailClass extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $phone;
    protected $size;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $phone, $size)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->size = $size;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact')
            ->with([
                'name'=>$this->name,
                'phone'=>$this->phone
                'size'=>$this->size
            ])
            ->subject('Новое письмо');
    }
}
