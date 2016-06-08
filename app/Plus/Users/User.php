<?php

namespace Chatty\Plus\Users;

use DB;
use Event;
use Chatty\Events\UserRegistered;
use Cmgmyr\Messenger\Traits\Messagable;
use Chatty\Plus\Statuses\Status;
use Chatty\Plus\Collections\Collection;
use Fenos\Notifynder\Notifable;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Model implements AuthenticatableContract
{
    use Messagable;
    use Notifable;
    use Authenticatable, EntrustUserTrait, FollowableTrait, EndorseableTrait, FriendableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */

    protected $table = 'tbl_users';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'location',
        'first_name',
        'last_name',
        'email',
        'password',
        'profilePic'
    ];


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];

    //register new user
    public static function register($username, $email, $password,$profilePic)
    {
        $user = new static(compact('username', 'email', 'password', 'profilePic'));

        Event::fire(new UserRegistered($user));

        return $user;
    }

    /**
     * Determine if a given user is the same as given one
     *
     * @param $user
     * @return bool
     */
    public function is($user)
    {
        if (!$user instanceof User) {
            return false;
        }
        return $this->username === $user->username;
    }


    // method to create various likes
    public function likes()
    {
        return $this->hasMany('Chatty\Plus\Likeables\Likeable', 'user_id');
    }

    public function getIsAdminAttribute(){
        return true;
    }
    // Relationship to STATUS table

    public function statuses()
    {
        return $this->hasMany('Chatty\Plus\Statuses\Status', 'user_id');
    }

    public function categories()
    {
        return $this->belongsToMany('Chatty\Plus\Categories\Category', 'tbl_preferred_cat',
        'user_id',
        'category_id');
    }

    public function getCategoryIDs()
    {
      // $col = $user->categories()->only('category_id')->get();
      // return $col;
      return $this->categories->only('category_id')->get();
    }


    public function products()
    {
        return $this->hasMany('Chatty\Plus\Products\Product');
    }



    public function services()
    {
        return $this->hasMany('Chatty\Plus\Services\Service', 'user_id');
    }

    public function collections()
    {
        return $this->hasMany('Chatty\Plus\Collections\Collection', 'user_id');
    }

    /**
     *
     * HELPER functions  to get various user name combinations
     *
     */
    // get full name
    public function getName()
    {
        if ($this->first_name && $this->last_name) {
            return "{$this->first_name} {$this->last_name}";
        }
        if ($this->first_name) {
            return $this->first_name;
        }
        return null;
    }

    // get name or username
    public function getNameOrUsername()
    {
        return $this->getName() ?: $this->username;
    }

    // get first- or username
    public function getFirstnameOrUsername()
    {
        return $this->first_name ?: $this->username;
    }



    // find out if a user has already liked a certain status
    public function hasLikedStatus(Status $status)
    {
        return (bool) $status->likes
            ->where('likeable_id', $status->id)
            ->where('likeable_type', get_class($status))
            ->where('user_id', $this->id)
            ->count();
    }
}
