<?php

namespace Chatty\Events;

use Chatty\Events\Event;
use Chatty\Plus\Users\User;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserRegistered extends Event
{
    use SerializesModels;
    public $user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
     public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
