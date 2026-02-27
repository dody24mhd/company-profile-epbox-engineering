<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CustomerConfirmationMail extends Mailable implements ShouldQueue
{
    use Queueable;
    use SerializesModels;

    public $contactData;

    /**
     * Create a new message instance.
     */
    public function __construct($contactData)
    {
        $this->contactData = $contactData;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Thank you for contacting EPBOX ENGINEERING PTE LTD',
            from: 'sales@epbox-engg.com',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.customer-confirmation-simple',
            with: [
                'name' => $this->contactData['name'],
                'email' => $this->contactData['email'],
                'company' => $this->contactData['company'] ?? 'Not provided',
                'phone' => $this->contactData['phone'] ?? 'Not provided',
                'customerMessage' => $this->contactData['message'],
            ]
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
