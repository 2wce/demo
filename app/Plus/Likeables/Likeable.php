<?php


namespace Chatty\Plus\Likeables;

use Illuminate\Database\Eloquent\Model;


class Likeable extends Model
{

    // define the table name

    protected $table = 'tbl_likeable';

    // provide a polymorphic relationship
    public function likeable(  ) {
    	return $this->morphTo();
    }


    // get user of a like (normal relationship)
    // this means the local 'user_id' field is the key (id) to the foreign table 'User'
    public function user()
    {
    	return $this->belongsTo('Chatty\Plus\Users\User', 'user_id');
    }

}