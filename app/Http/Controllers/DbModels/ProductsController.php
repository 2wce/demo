<?php

namespace Chatty\Http\Controllers\DbModels;

use Auth;
use DB;
use Image;
use Illuminate\Support\Str;
use Chatty\Plus\Users\User;
use Chatty\Plus\Statuses\Status;
use Chatty\Plus\Products\Product;
use Chatty\Plus\Categories\Category;
use Chatty\Plus\Reviews\Review;


use Chatty\Http\Requests;
use Chatty\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProductsController extends Controller {



  public function __construct(){

   parent::__construct();
  }




  public function getCategory($cat_id){
    return View::make('products.category')
      ->with('products' , Product::where('category_id', $cat_id)->get()->paginate(6))
      ->with('category',Category::find($cat_id));
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function index(){
    $categories = DB::table('tbl_categories')->lists('category_name', 'id');


    //dd(User::find(Product::find(1)->user_id));
    return view('products.index')
  		->with('products', Product::all())
      ->with('categories', Category::all());
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $categories = \DB::table('tbl_categories')->lists('category_name', 'id');
      return view('products.create')->with('categories', $categories);

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){


      $files =[];
        if ($request->file('base_image')) $files[] = $request->file('base_image');
        if ($request->file('file2')) $files[] = $request->file('file2');
        if ($request->file('file3')) $files[] = $request->file('file3');
        foreach ($files as $file)
        {

            if(!empty($file)){
              $name = Auth::user()->username;
              $email =Auth::user()->email;
              $path = 'uploads/'.$name.$email;

                $filename=$file->getClientOriginalName();
                $file->move(
                    $path, $filename
                );
            }



        }





    if (Input::hasFile('base_image'))
    {




      $product = Auth::user()->products()->create([
        'category_id' => $request->input('category'),
        'product_name' => $request->input('product_name'),
        'product_description' => $request->input('product_description'),
        'cond' => $request->input('condition'),
        'price' => $request->input('price'),
        'base_image'=> $path.'/'.$file->getClientOriginalName(),
      ]);


        $id = $product ->id;

      Auth::user()->statuses()->create([
        'body' => $request->input('product_name'),
        'type_id'=> 1,'category_id' => $request->input('category'),
        'product_id' =>$id,

      ]);

      $files =[];
        if ($request->file('base_image')) $files[] = $request->file('base_image');
        if ($request->file('file2')) $files[] = $request->file('file2');
        if ($request->file('file3')) $files[] = $request->file('file3');
        foreach ($files as $file)
        {
           $image = $product->images()->create([  'image_path'=> $path.'/'.$file->getClientOriginalName(),


           ]);

        }







    }
    else{

       dd("Base image not found ");
    }

    return redirect()->back()
			->with('info', 'Your status has been updated.');

    //return redirect()->route('products.index')->with('info', 'Product saved');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeReview(Request $request){

      $user =Auth::user();
      $post = Product::findOrFail($request->product_id);
//dd($post);
      $rating = $post->rating([
        'title' => 'Some title',
        'body' => $request->comment,
        'rating' => $request->rating,
      ], $user);

dd($rating);

  return redirect()->back()
    ->with('info', 'Your status has been updated.');

  //return redirect()->route('products.index')->with('info', 'Product saved');
  }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)

     {
       //$reviews = Review::findOrFail($id);
       $product = Product::findOrFail($id);


       //dd($reviews);
     return view('products.show')
    // ->with('reviews',  Review::where('product_id', $id)->get())
     ->withProduct($product);
     }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $product = Product::findOrFail($id);

      return view('products.edit')->withProduct($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      $product = product::findOrFail($id);


   $this->validate($request, [
       'product_name' => 'required',
       'product_description' => 'required'
   ]);

   //$name = Auth::user()->username;
   //$email =Auth::user()->email;
   //$path = 'uploads/'.$name.$email;

   //dd($path);
   //$file = Input::file('base_image');

   //$file->move($path, $file->getClientOriginalName());

   $input = $request->all();




   $product->fill($input)->save();
     return redirect()->route('products.index')->with('info', 'Product has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $product = Product::findOrFail($id);

    $product->delete();



    return redirect()->route('products.index')->with('info', 'Product has been deleted');
    }
}
