<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Reminder extends Mailable
{
    use Queueable, SerializesModels;
    protected $email;
    protected $unsubscribe_key;
    protected $id;
    protected $body;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $unsubscribe_key, $id, $body)
    {
        $this->email = $email;
        $this->unsubscribe_key = $unsubscribe_key;
        $this->id = $id;
        $this->body = $body;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this
        ->subject('Death')->from('mementomori@death.taqfu.com',
        'Memento Mori')->view('email.reminder')
        ->with(['email'=>$this->email,
        'unsubscribe_key'=>$this->unsubscribe_key, 'id'=>$this->id,
        'body'=>$this->body]);
    }
}
