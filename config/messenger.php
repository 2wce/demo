<?php

return [

    'user_model' => Chatty\Plus\Users\User::class,

    'message_model' => Chatty\Plus\Messenger\Message::class,

    'participant_model' => Chatty\Plus\Messenger\Participant::class,

    'thread_model' => Chatty\Plus\Messenger\Thread::class,

    /**
     * Define custom database table names.
     */

    'messages_table' => null,

    'participants_table' => null,

    'threads_table' => null,
];
