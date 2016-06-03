<?php
namespace Chatty\Plus\Statuses;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Status extends Model
{


    // define the table name

    protected $table = 'tbl_posts';



    // which fields can be updated?
    protected $fillable = [

    	'body', 'parent_id','type_id', 'cat_id',	'product_id', 'service_id','post_image','collection_id'
    ];

    // public function getProduct($id)
    // {
    //   return $products = Product::find($id);
    // }

    public function category()
    {
      return $this->belongsTo('Chatty\Plus\Categories\Category', 'cat_id');
    }
    // define the relationship with the user table
    // by joining this table's 'user_id' field with the user-table's 'id' field
    public function user()
    {
    	return $this->belongsTo('Chatty\Plus\Users\User', 'user_id');
    }

    public function product(){

      return $this->belongsTo('Chatty\Plus\Products\Product');
    }

    public function collection(){

      return $this->belongsTo('Chatty\Plus\Collections\Collection');
    }

    public function service(){

      return $this->belongsTo('Chatty\Plus\Services\Service');
    }

    // create a scope that limits the results to 'status updates'
    // (A scope allows us to use the Query Builder to filter out anything we do not want in the result)
    public function scopeNotReply( $query ) {
    	return $query->where('parent_id','=',0);
    }

    public function scopeInCategory( $query ) {
      return $query->where('cat_id','=', Auth::user()->cat_id);
    }

    // create a relationship between statuses (parent_id = NULL) and replies, using the parent_id as foreign key
    public function replies()
    {
        return $this->hasMany('Chatty\Plus\Statuses\Status', 'parent_id');
    }


    // method to create various likes
    public function likes()
    {
        return $this->morphMany('Chatty\Plus\Likeables\Likeable', 'likeable');
    }

}
