<?php

namespace Chatty\Http\Controllers\Relationships;

use Auth;
use DB;

use Chatty\Plus\Users\User;

use Chatty\Http\Requests;
use Chatty\Http\Controllers\Controller;

use Illuminate\Http\Request;

class EndorsementController extends Controller{

    public function listEndorsements() {

        $endorsers = Auth::user()->endorsedBy();

        /*
        * @todo Return view showing user's endorsers
        return view('friends.index')
            ->with('endorsers', $endorsers);
          */
    }

    /**
     *  Endorse user
     */
    public function endorse(Request $request) {
        // get the requested user's DB object
        //dd($request);
        $user = User::find($request->userId);

        // A user can't send himself a request...
        if ( Auth::user()->id === $user->id ) {
            return redirect()
                ->route('home')
                ->with('info', 'You cannot endorse yourself');
        }

        // check if they already endorsed
        if ( Auth::user()->hasEndorsed($user) ) {
            return redirect()
                ->route('profile.index', ['username' => $user->username])
                ->with('info', 'You have already endorsed this user.');
        }

        // now create endorsement
        Auth::user()->addEndorsement( $user );

        return redirect()
            //->route('profile.index', ['username' => $username])
            //->with('info', 'Endorsement successful.');
                ->route('home')
                ->with('info', 'Endorsement successful');

    }

}//class controller
