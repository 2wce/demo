<?php

namespace Chatty\Http\Controllers\DbModels;

use Auth;
use Image;

use Chatty\Plus\Types\Type;
use Chatty\Plus\Services\Service;
use Chatty\Plus\Users\User;

use Chatty\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class TypesController extends Controller
{

	public function __construct(){

	 parent::__construct();
	}

  public function index(){

      return view('types.index');




  }

  public function show($id){



        return view('types.show')
        ->with('services' ,Service::where('id', $id)->get())
        ->with('type',Type::find($id));





    }



}
