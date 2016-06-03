<?php

namespace Chatty\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Chatty\Http\Requests;
use Chatty\Jobs\RegisterUser;
use Chatty\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show a form to register the user
     * @return Response
     */
    public function create()
    {
        return view('auth.signup');
    }


    /**
     * Create a new User
     * @param Request $request
     * @return string
     */
    public function store(Request $request)
    {

        $user = $this->dispatchFrom(RegisterUserJob::class, $request);

        Auth::login($user);

        //Flash::overlay("Glad to have you as a new Larabook member!");
        return redirect(route('home'))
            ->with('info', 'Your account has been created and you can now sign in.');
    }
}
