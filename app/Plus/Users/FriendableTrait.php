<?php

namespace Chatty\Plus\Users;


trait FriendableTrait
{

  /**
   *
   * Relationships with FRIENDS table
   *
   */
  public function friendsOfMine()
  {

      return $this->belongsToMany('Chatty\Plus\Users\User', 'tbl_connections', 'user_id', 'connection_id');
  }

  public function friendOf()
  {
      return $this->belongsToMany('Chatty\Plus\Users\User', 'tbl_connections', 'connection_id', 'user_id');
  }

  public function friends()
  {
      $friendsList =
          $this->friendsOfMine()->wherePivot('accepted', true)->get()
              ->merge( $this->friendOf()->wherePivot('accepted', true )->get() );
      //dd($friendsList);
      return $friendsList;
  }


  /**
   * FRIEND REQUESTS handling
   */
  public function friendRequests()
  {
      return $this->friendsOfMine()->wherePivot('accepted', false)->get();
  }

  public function friendRequestsPending()
  {
      return $this->friendOf()->wherePivot('accepted', false)->get();
  }

  public function hasFriendRequestPending(User $user)
  {
      return (bool) $this->friendRequestsPending()->where('id', $user->id)->count();
  }

  public function hasFriendRequestReceived(User $user)
  {
      return (bool) $this->friendRequests()->where('id', $user->id)->count();
  }

  public function addFriend(User $user)
  {
      return $this->friendOf()->attach($user->id);
  }

  public function acceptFriendRequest(User $user)
  {
      return $this->friendRequests()->where('id', $user->id)->first()
              ->pivot->update(['accepted' => true]);
  }

  public function isFriendsWith(User $user)
  {
      return (bool) $this->friends()->where('id', $user->id)->count();
  }

}
