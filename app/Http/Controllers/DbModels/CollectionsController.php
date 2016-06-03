<?php

namespace Chatty\Http\Controllers\DbModels;
use Auth;

use Chatty\Http\Requests;
use Chatty\Http\Controllers\Controller;

use Chatty\Plus\Collections\Collection;
use Chatty\Plus\Users\User;
use Chatty\Plus\Types\Type;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CollectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(){

      parent::__construct();
     }

     public function index()
     {
       $collections = Collection::all();
        foreach($collections as $collection){
          $id =  $collection->id;
        }

        $collection = Collection::find($id);

        return view('collections.index')
      			->with('collections', Collection::all())
            ->with('products', $collection->products());
      }

      /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
       $types = \DB::table('tbl_types')->lists('name', 'id');
       return view('services.create')->with('types', $types);
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $collection = Auth::user()->collections()->create([
          'title' => $request->input('title'),
          'description' => $request->input('description'),
        ]);

        return redirect()->back()
          ->with('info', 'Your Collection has been created Start adding products.');
    }

      public function storeToCollection(Request $request)
      {

        $product_id = $request->input('product_id');

        $collection_id = $request->input('collection');

        $collection = Collection::find($collection_id);
        $collection->products()->attach($product_id);

                return redirect()->back()
                ->with('info', 'You have Succesfully add Product to Collection.');

        }

        public function shareCollection(Request $request)
        {



          Auth::user()->statuses()->create([
            'body' => $request->input('description'),
            'type_id'=> 4,
            'collection_id' =>$request->input('collection_id'),

          ]);




                  return redirect()->back()
                  ->with('info', 'You have shared your Collection.');

          }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $collection = Collection::findOrFail($id);



    return view('collections.show')->withCollection($collection)
          ->with('products', $collection->products());


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
