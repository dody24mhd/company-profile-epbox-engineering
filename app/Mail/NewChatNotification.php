<?php

namespace App\Mail;

use App\Models\ChatConversation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewChatNotification extends Mailable implements ShouldQueue
{
    use Queueable;
    use SerializesModels;

    public $conversation;

    /**
     * Create a new message instance.
     */
    public function __construct(ChatConversation $conversation)
    {
        $this->conversation = $conversation;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Live Chat Message - EPBOX ENGINEERING PTE LTD',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.new-chat-notification',
            with: [
                'conversation' => $this->conversation,
                'adminUrl' => url('/admin/live-chat'),
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
