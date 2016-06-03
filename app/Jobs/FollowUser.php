<?php

namespace Chatty\Jobs;

use Chatty\Jobs\Job;
use Chatty\Plus\Users;
use Chatty\Plus\Users\UserRepository;

use Illuminate\Contracts\Bus\SelfHandling;

class FollowUser extends Job implements SelfHandling
{

      protected $userIdToFollow;
      protected $userId;

      /**
       * Create a new job instance.
       *
       * @param $userIdToFollow
       * @param $userId
       */
      public function __construct($userIdToFollow, $userId)
      {
          $this->userIdToFollow = $userIdToFollow;
          $this->userId = $userId;
      }

      /**
       * Execute the job.
       *
       * @param UserRepository $repository
       * @return mixed
       */
      public function handle(UserRepository $repository)
      {
          $user = $repository->findById($this->userId);

          $repository->follow($this->userIdToFollow, $user);

          return $user;
      }
}
