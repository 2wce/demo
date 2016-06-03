<?php

namespace Chatty\Listeners;

use Chatty\Events\UserRegistered;
use Chatty\Plus\Mailers\UserMailer;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailConfirmation
{
    /**
     * Create the event listener.
     *
     * @param UserMailer $mailer
     */
    public function __construct(UserMailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Handle the event.
     *
     * @param  UserHasRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        $this->mailer->sendWelcomeMessageTo($event->user);
    }

}
