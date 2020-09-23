<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MentorRequestMail extends Mailable
{
    use Queueable, SerializesModels;
    
    protected $content;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($content)
    {
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mentor_request.email')
                    ->to($this->content['to'], $this->content['to_name'])
                    ->from('rolemy.info@gmail.com')
                    ->subject($this->content['subject'])
                    ->with([
                        'content' => $this->content,
                    ]);
    }
}
