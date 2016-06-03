<?php


namespace Chatty\Plus\Services;

use Illuminate\Database\Eloquent\Model;


class Service extends Model
{


    // define the table name
    protected $table = 'tbl_services';


    // which fields can be updated?
    protected $fillable = [
    	'name', 'description','charge', 'base_image','user_id','type_id'
    ];

    public function status() {
       return $this->hasOne('Chatty\Plus\Statuses\Status');
    }

        public function types() {
              return $this->belongsTo('Chatty\Plus\Types\Type', 'type_id');


          }
        // define the relationship with the user table
        // by joining this table's 'user_id' field with the user-table's 'id' field
        public function user()
        {
        	return $this->belongsTo('Chatty\Plus\Users\User', 'user_id');
        }




    // method to create various likes
    public function likes()
    {
        return $this->morphMany('Chatty\Plus\Likeables\Likeable', 'likeable');
    }

}
