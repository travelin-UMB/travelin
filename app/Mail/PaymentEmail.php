<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Reservation;

class PaymentEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $reservation;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('mail@gmail.com')
        ->markdown('pages.landingpage.payment')
        ->with([
            'travel_paket'          => $this->reservation->travel_paket,
            'participant_count'          => $this->reservation->participant_count,
            'travel_price'          => $this->reservation->travel_price,
            'status'          => $this->reservation->status,
            'travel_date'          => $this->reservation->travel_date,
            'user_id'          => $this->reservation->users_id,
            'city'          => $this->reservation->travel_city,
        ]);
    }
}
