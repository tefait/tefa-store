<?php

namespace App\Mail;

use App\Models\Customer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CustomerRegisterMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $customer;

    protected $randomPassword;

    public function __construct(Customer $customer, $randomPassword)
    {
        $this->customer = $customer;
        $this->randomPassword = $randomPassword;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Verifikasi Pendaftaran Anda',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.register',
            with: [
                'customer' => $this->customer,
                'password' => $this->randomPassword,
                'from' => [
                    'address' => env('MAIL_FROM_ADDRESS', 'Tefa IT@gmail.com'),
                    'name' => env('MAIL_FROM_NAME', cache('settings')['site-name']['value']),
                ],
            ],
        );
    }
}
