<?php

namespace Chatty\Plus\Users;


trait FollowableTrait
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function followedUsers()
    {
        return $this->belongsToMany(
            'Chatty\Plus\Users\User',
            'tbl_connections',
            'user_id',
            'connection_id'
        )->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function followers()
    {
        return $this->belongsToMany(
            static::class,
            'tbl_connections',
            'connection_id',
            'user_id'
        )->withTimestamps();
    }

    /**
     * @param User $user
     * @return bool
     */
    public function isFollowedBy(User $user)
     {
         $followedUsersIds = $this->followers()
             ->lists('user_id')->toArray();
    //    $followedUsersIds = [11];
        return in_array($user->id, $followedUsersIds);
    }
}
