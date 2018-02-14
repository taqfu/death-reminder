<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Unsubscribe extends Mailable
{
    use Queueable, SerializesModels;
    protected $email;
    protected $unsubscribe_key;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $unsubscribe_key)
    {
      $this->email = $email;
      $this->unsubscribe_key = $unsubscribe_key;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this
        ->subject('Are you ready to go back to living forever?')->from('mementomori@death.taqfu.com',
        'Memento Mori')->view('email.unsubscribe')->with(['email'=>$this->email, 'unsubscribe_key'=>$this->unsubscribe_key]);
      }
}
