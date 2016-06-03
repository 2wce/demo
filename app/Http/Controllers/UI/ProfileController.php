<?php

namespace Chatty\Http\Controllers\UI;

use Auth;

use Chatty\Plus\Users\User;

use Chatty\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProfileController extends Controller
{

	public function __construct(){

	 parent::__construct();
	}

	public function getProfile($username)
	{
		$user = User::where('username', $username)->first();

		if (!$user){
			abort(404);
		}

		// provide data for the timeline of this user
		$statuses = $user->statuses()->notReply()
				->orderBy('created_at', 'desc')
				->paginate(10);

				setcookie("_MYJID", $user->username);

		return view('profile.index')
			->with('user', $user )
			->with('statuses', $statuses )
			->with('authUserIsFriend', Auth::user()->isFriendsWith($user) );
	}

	public function getProfileNetwork($username)
	{
		$user = User::where('username', $username)->first();

		if (!$user){
			abort(404);
		}

		// provide data for the timeline of this user
		$statuses = $user->statuses()->notReply()
				->orderBy('created_at', 'desc')
				->paginate(10);

				setcookie("_MYJID", $user->username);

		return view('profile.network')
			->with('user', $user )
			->with('statuses', $statuses )
			->with('authUserIsFriend', Auth::user()->isFriendsWith($user) );
	}


	public function getProfileTimeline($username)
	{
		$user = User::where('username', $username)->first();

		if (!$user){
			abort(404);
		}

		// provide data for the timeline of this user
		$statuses = $user->statuses()->notReply()
				->orderBy('created_at', 'desc')
				->paginate(10);

				setcookie("_MYJID", $user->username);

		return view('profile.timeline')
			->with('user', $user )
			->with('statuses', $statuses );
	}

	public function getProfileProducts($username)
	{
		$user = User::where('username', $username)->first();

		if (!$user){
			abort(404);
		}

		// provide data for the timeline of this user
		$products = $user->products()
				->orderBy('created_at', 'desc')
				->paginate(10);

				setcookie("_MYJID", $user->username);

		return view('profile.products')
			->with('user', $user )
			->with('products', $products );
	}


	public function getProfileCollections($username)
	{
		$user = User::where('username', $username)->first();

		if (!$user){
			abort(404);
		}

		// provide data for the timeline of this user
		$collections = $user->collections()
				->orderBy('created_at', 'desc')
				->paginate(10);

				setcookie("_MYJID", $user->username);

		return view('profile.collections')
			->with('user', $user )
			->with('collections', $collections );
	}




	public function getEdit()
	{
		return view('profile.edit');
	}




	public function postEdit(Request $request)
	{
		if (Input::hasFile('base_image'))
    {
			$name = Auth::user()->username;
			$email =Auth::user()->email;
			$path = 'uploads/'.$name.$email;

			$file = Input::file('base_image');

			$file->move($path, $file->getClientOriginalName());
	  	$this->validate($request, [
			'first_name' => 'alpha|max:50',
			'last_name'  => 'alpha|max:50',
			'location'   => 'max:20',
			'profilePic'=> $path.'/'.$file->getClientOriginalName(),
		]);

		$user = Auth::user()->update([
			'first_name' => $request->input('first_name'),
			'last_name'  => $request->input('last_name') ,
			'location'   => $request->input('location')  ,
			'profilePic'=> $path.'/'.$file->getClientOriginalName(),
		]);

		return redirect()
			->route('profile.edit')
			->with('info', 'Your profile has been updated.');
	}
	else {

		dd("No Profile Pic");
	}
}
public function showContactinfo(Request $request)
   {
   	  $data = 'contact';
      return view('portal.contact_details')->with('data',$data);
   }
   public function showBusinessInfo()
   {
   	  $data = 'business';
      return view('portal.business_details')->with('data',$data);
   }
   public function showProfessionalInfo(Request $request)
   {
   	  $data ='professional';
      return view('portal.proffesional_details')->with('data',$data);
   }
   public function showCommunityInfo(Request $request)
   {
   	  $data = 'community';
      return view('portal.community_settings')->with('data',$data);
   }
   public function showAcademicInfo(Request $request)
   {
   	  $data = 'academic';
      return view('portal.academic_details')->with('data',$data);
   }
   public function showGeneralSettings(Request $request)
   {
   	  $data = 'general';
      return view('portal.general_settings')->with('data',$data);
   }
   public function showLocationInfo(Request $request)
   {
   	  $data = 'location';
      return view('portal.location_settings')->with('data',$data);
   }

}
