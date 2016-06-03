<?php


namespace Chatty\Plus\Images;

use Illuminate\Database\Eloquent\Model;


class Image extends Model
{


    // define the table name

    protected $table = 'tbl_images';



    // which fields can be updated?
    protected $fillable = [
    	'product_id','image_path'
    ];


    // define the relationship with the user table
    // by joining this table's 'user_id' field with the user-table's 'id' field
    public function products() {

      	return $this->belongsTo('Chatty\Plus\Products\Product');
    }




}
