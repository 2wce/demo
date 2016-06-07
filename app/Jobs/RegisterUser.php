<?php

namespace Chatty\Jobs;

use Chatty\Jobs\Job;
use Auth;
use File;
use Chatty\Plus\Users\User;
use Chatty\Plus\Users\UserRepository;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterUser extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;


    protected $username;
    protected $email;
    protected $password;
    protected $userRepo;
    protected $profilePic;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($username, $email, $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        //$this->profilePic = $profilePic;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(UserRepository $userRepo)
    {
        #User details
        $username = $this->username;
        $email = $this->email;
        $password = bcrypt($this->password);
        $profilePic = 'avatar.png';

        #User Directory
        $user_folder = $username . $email ;
        $path = public_path().'/uploads/' . $user_folder;
        File::makeDirectory($path, $mode = 0777, true, true);

        #Register User
        $user = User::register(
            $username, $email, $password,$profilePic
        );
        //Auth::login($user);
        $userRepo->save($user);
        //dd(gettype($user));
        return $userRepo->findByUsername($username);
    }
}
