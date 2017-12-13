<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\Model\ModelUser;

class NewModelUserNotification extends Notification {

    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(ModelUser $model) {
        //
        $this->ModelUser = $model;
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
                        ->greeting('Hello, ' . $this->ModelUser->name)
                        ->line('Welcome to Talent Guru, and thank you for signing up with us.')
                        ->action('Start uploading your pictures here.', url('/audio/create'))
                        ->line('Thank you for using our application!');
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
