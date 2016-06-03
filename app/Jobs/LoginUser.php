<?php

namespace Chatty\Jobs;

use Chatty\Jobs\Job;
use Cache;
use Chatty\Plus\Users\User;
use Illuminate\Contracts\Bus\SelfHandling;

class LoginUser extends Job implements SelfHandling
{

    protected $user;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user= $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(StatusRepository $statusRepo)
    {

    }
}
