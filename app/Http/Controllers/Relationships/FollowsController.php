<?php

namespace Chatty\Http\Controllers\Relationships;

use Auth;
use Chatty\Plus\Users\User;
use Chatty\Jobs\FollowUser;
use Chatty\Jobs\UnfollowUser;
use Chatty\Http\Controllers\Controller;
use Notifynder;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    /**
     * Follow a user.
     *
     * @param FollowUserRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->dispatchFrom(FollowUser::class, $request, ['userId' => Auth::id()])
        ->with('info', 'You are following this user');

        Notifynder::category('user.following')
            ->from(Auth::user()->id)
            ->to($request->userIdToFollow)
            ->url('http://dev.dev/')
            ->send();

        return redirect()->back();
    }

    /**
     * Unfollow a user.
     *
     * @param UnfollowUserRequest $request
     *
     * @return Response
     */
    public function destroy(Request $request)
    {
        $this->dispatchFrom(UnfollowUser::class, $request, ['userId' => Auth::id()])
          ->with('info', 'You have now unfollowed this user.');

        return redirect()->back();
    }
}
