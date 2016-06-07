<?php

namespace Chatty\Plus\Mailers;

use Chatty\Plus\Users\User;

class UserMailer extends Mailer
{
    public function sendWelcomeMessageTo(User $user)
    {
        $view = 'emails.welcome';
        $subject = 'Welcome aboard';

        $this->sendTo($user, $subject, $view);
    }
}
