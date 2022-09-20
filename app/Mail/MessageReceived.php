<?php

declare(strict_types=1);

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageReceived extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @param array $data 
     * @param string $phone 
     * @param string $email 
     * @param string $message 
     * @return void 
     */
    public function __construct(
        public string $name,
        public string $email,
        public string $phone,
        public string $message_content,
    )
    {}

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.message_received')
            ->subject('Mensagem de contato do site');
    }
}
