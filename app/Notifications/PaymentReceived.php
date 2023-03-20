<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PaymentReceived extends Notification
{
    use Queueable;


    protected $amount;

    public function __construct($amount)
    {

        $this->amount = $amount;
    }

    public function via($notifiable)
    {
        return ['mail','database','nexmo'];
    }


    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Risala Tarhibia رسالة ترحيبية')
                    ->greeting('hello my name is yahya')
                    ->line('The introduction to the notification.')
                    ->action('Sign Up', url('/'))
                    ->line('welcomee')
                    ->line('Thank you for using our application!');
    }

    public function toVonage($notifiable)
    {
        return (new VonageMessage)
            ->content('Your laracasts payment is success');
    }

    public function toArray($notifiable)
    {
        return [
              'amount' => $this->amount
        ];
    }
}
// world world world world world world
