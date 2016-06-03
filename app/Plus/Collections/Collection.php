<?php


namespace Chatty\Plus\Collections;

use Illuminate\Database\Eloquent\Model;


class Collection extends Model
{


    // define the table name

    protected $table = 'tbl_collections';



    // which fields can be updated?
    protected $fillable = [
    	'title','description','category','user_id','parent_id'
    ];


    // define the relationship with the user table
    // by joining this table's 'user_id' field with the user-table's 'id' field
    public function products() {

       return $this->belongsToMany('Chatty\Plus\Products\Product','tbl_collection_product');
    }


    public function user()
    {
     return $this->belongsTo('Chatty\Plus\Users\User');
    }

    public function status() {
       return $this->hasOne('Chatty\Plus\Statuses\Status');
    }

}
