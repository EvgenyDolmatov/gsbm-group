<?php

namespace App\Mail;

use App\Models\EmployeeRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FeedbackResumeMail extends Mailable
{
    use Queueable, SerializesModels;

    public EmployeeRequest $employeeRequest;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($employeeRequest)
    {
        $this->employeeRequest = $employeeRequest;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: new Address('no-reply@gsbm-group.ru', config('app.name')),
            subject: 'Новое резюме',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.feedback-resume',
            with: [
                'employeeRequest' => $this->employeeRequest,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [
            Attachment::fromPath($this->employeeRequest->getFile())
        ];
    }
}
