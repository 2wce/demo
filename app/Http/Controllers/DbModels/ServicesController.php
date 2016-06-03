<?php

namespace Chatty\Http\Controllers\DbModels;

use Auth;

use Chatty\Plus\Users\User;
use Chatty\Plus\Types\Type;
use Chatty\Plus\Services\Service;

use Chatty\Http\Requests;
use Chatty\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ServicesController extends Controller
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
      $type = \DB::table('tbl_types')->lists('name', 'id');



        return view('services.index')
      			->with('services', Service::all())
      			->with('type', Type::all());
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
      if (Input::hasFile('base_image'))
      {

        $name = Auth::user()->username;
        $email =Auth::user()->email;
        $path = 'uploads/'.$name.$email;



        $file = Input::file('base_image');

        $file->move($path, $file->getClientOriginalName());

        $service = Auth::user()->services()->create([
          'type_id' => $request->input('type'),
          'name' => $request->input('name'),
          'description' => $request->input('description'),
          'charge' => $request->input('charge'),
          'base_image'=> $path.'/'.$file->getClientOriginalName(),
        ]);

        $id = $service->id;




      Auth::user()->statuses()->create([
        'body' => $request->input('name'),
        'type_id'=> 2,
        'service_id' =>$id,

      ]);



      }
      else{

       dd("Base image not found ");
      }
      /*
      ; */
      //Product::create($input);

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
      $service = Service::findOrFail($id);

    return view('services.show')->withService($service);
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
