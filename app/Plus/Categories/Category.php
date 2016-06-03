<?php


namespace Chatty\Plus\Categories;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{


    // define the table name

    protected $table = 'tbl_categories';



    // which fields can be updated?
    protected $fillable = [
    	'category_name'
    ];


    // define the relationship with the user table
    // by joining this table's 'user_id' field with the user-table's 'id' field
    public function products() {

       return $this->hasMany('Chatty\Plus\Products\Product', 'product_id');
    }




}
