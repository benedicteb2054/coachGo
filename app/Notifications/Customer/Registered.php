<?php

namespace App\Notifications\Customer;

use App\Customer;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class Registered extends Notification implements ShouldQueue
{
    use Queueable;

    public $customer;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $customer)
    {
        $this->customer = $customer;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->from(get_sender_email(), get_sender_name())
            ->subject( trans('notifications.customer_registered.subject', ['marketplace' => get_platform_title()]) )
            ->markdown('mail.customer.welcome', ['url' => route('user.activation', $this->customer->verification_token), 'customer' => $this->customer]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'name' => $this->customer->getName(),
            'email' => $this->customer->email,
        ];
    }
}
