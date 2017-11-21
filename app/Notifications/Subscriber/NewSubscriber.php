<?php

namespace App\Notifications\Subscriber;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\Subscriber\Subscriber;

class NewSubscriber extends Notification {

    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Subscriber $subscriber) {
        $this->subscriber = $subscriber;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable) {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable) {
        return (new MailMessage)
                        ->subject("Welcome to Talent Guru")
                        ->greeting('Hello, ' . $this->subscriber->fullname)
                        ->line('Welcome to Talent Guru, and thank you for signing up with us.')
                        ->line("This is to notify you that we have received your pre-registration. We will keep you posted on updates related to this platform and specifically the categories you've signed up for.")
                        ->line('Thank you for for connecting with us. We are looking forward to working with you!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable) {
        return [
                //
        ];
    }

}
