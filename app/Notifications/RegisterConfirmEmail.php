<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class RegisterConfirmEmail extends Notification
{
    use Queueable;


	 /**
     * The password reset token.
     *
     * @var string
     */
    public $confirmation_code;

    /**
     * Create a new notification instance.
     *
     * @param string $confirmation_code
     * @return void
     */
    public function __construct($confirmation_code)
    {
    	$this->confirmation_code = $confirmation_code;    
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
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
					->subject(trans('auth/verify.email-title'))
					->line(trans('auth/verify.email-title'))
            		->line(trans('auth/verify.email-intro'))
            		->action(trans('auth/verify.email-button'), url('confirm/' . $this->confirmation_code));		
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
            //
        ];
    }
}
