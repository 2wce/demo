<? php

 namespace Chatty\Plus\Statuses;

 use Chatty\Users\User;
 /**
  *
  */
  class StatusRepository
 {
    /*
    *Save status
    *@param Status
    *@return mixed
    */
    public function save(Status $status)
    {
      return Auth::user()->statuses()->save($status);
    }

     /*
     *Get Statuses for given user
     *@param User
     *@return Statuses
     */
     public function getAllForUser(User $user)
     {
         return $user->statuses()->with('user')->latest()->get();
     }

     /*
     *Get Feed for given user including people the user follows
     *@param User
     *@return Statuses
     */
     public function getFeedForUser(User $user)
     {
          $userIds = $user->follows->lists('connection_id');
          $userIds[] = $user->id;
          return Statuses::whereIn('user_id', $userIds)->latest()->get();
     }
 }
