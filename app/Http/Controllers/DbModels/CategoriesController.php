<?php

namespace Chatty\Http\Controllers\DbModels;

use Auth;
use Image;

use Chatty\Plus\Products\Product;
use Chatty\Plus\Users\User;
use Chatty\Plus\Categories\Category;

use Chatty\Http\Controllers\Controller;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

	public function __construct(){

	 parent::__construct();
	}

  public function index(){

      return view('categories.index');




  }

  public function show($id){



        return view('categories.show')
        ->with('products' , Product::where('category_id', $id)->get())
        ->with('category',Category::find($id));





    }



}
