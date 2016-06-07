<?php

namespace Chatty\Http\Controllers\Auth;

use Auth;
use DB;
use Input;
use Mail;

use Chatty\Plus\Users\UserRepository;
use Chatty\Plus\Users\User;
use Chatty\Http\Controllers\Controller;
use Chatty\Jobs\RegisterUser;
use Chatty\Jobs\LoginUser;
use Illuminate\Http\Request;
use Illuminate\Cookie\CookieJar;
use Illuminate\Support\Facades\File;

class AuthController extends Controller{

	protected $userRepo;
	public function __construct(UserRepository $userRepo)
	{
		parent::__construct();
		$this->userRepo = $userRepo;
	}
	/*
	 *  SIGN UP   methods
	 *	GET request (show form)
	 */
	public function getSignup()
	{
		return view('auth.signup');
	}

	/* POST request (process form submit)
	 * @TODO error check redirects on empty values
	 *
	 */
	public function postSignup(Request $request)
	{
		/* Validate the input
		 *(exceptions will immediately trigger a *redirect to the getSignup() method)
		 */
		$this->validate($request, [
			'email'    => 'required|unique:tbl_users|email|max:255',
			'username' => 'required|unique:tbl_users|alpha_dash|max:20',
			'password' => 'required|min:6'
		]);


		#Dispatch Job @RETURN user
		$user = $this->dispatchFrom(RegisterUser::class, $request);
		$user = $this->userRepo->findByUsername($request->username);
		//dd($user);
		#Login User
		Auth::login($user);

		// redirect the user to the home page
		#@TODO redirect to category select
		return redirect()
			->route('cats');
	}

	public function postCategorySelect(Request $request)
	{
			$user = Auth::user();
			$caty = Input::get('category');
//dd($caty);
			$cats = serialize($caty);
			//dd($cats);
			DB::table('tbl_users')
            ->where('id', $user->id)
            ->update(['categories' =>$cats]);

//			$this->dispatchFrom(LoginUser::class, $user);
      return redirect()->route('home');
	}



	/*
	 *  SIGN IN  methods
	 *  GET request (show form)
	 */
	public function getSignin()
	{
		return view('auth.signin');
	}

	/* POST request (process form submit)
	 * @TODO error check redirects on empty values
	 */
	public function postSignin(Request $request)
	{
		/*Validate the input
		 * (excpetions will immediately trigger a redirect to the getSignup() method)
		 */
		$this->validate($request, [
			'email'    => 'required_without:username|email|max:255',
			'username' => 'required_without:email|alpha_dash|max:20',
			'password' => 'required|min:6'
		]);


		//dd($user);
		// check which field was filled out as users can sign in with either email or username
		if ($request->get('username')==='') {
			// attempt to sign in with email
			Auth::attempt( $request->only(['email', 'password']), $request->has('remember') );

		} else {
			// attempt to sign in with username
			Auth::attempt( $request->only(['username', 'password']), $request->has('remember') );
		}
		// was it successful?
		if ( ! Auth::check() ) {
			return redirect()->back()->with('info', 'Could not sign you in with those details!');
		}

		$user = Auth::user();
		return redirect()
			->route('home')
			->with('user', $user)
			->with('info', 'You are now signed in');
	}

	/*
	 * Activate user
	 * @TODO Utilize repositories instead of direct DB access
	 */
	public function getActivate($code){

		$user = DB::table('tbl_users')->where('activation_code', $code);
		$user= DB::table('tbl_users')
			->update(['activation_code' =>'']);

		$user= DB::table('tbl_users')
			->update(['isActive' => 1]);

			if($user){
				return redirect()->route('home')
					->with('info', 'You can now sign in');

			}
			return redirect()->route('home')
					->with('info', 'We could not activate your account.');
	}


	/**
	 * SIGN OUT   method
	 * GET request (show form)
	 */
	public function getSignout()
	{
		Auth::logout();
		return redirect()->route('home')->with('info', 'You have been signed out.');
	}
}
