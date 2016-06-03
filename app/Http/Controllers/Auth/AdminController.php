<?php

namespace Chatty\Http\Controllers\Auth;

use Tracker;

use Chatty\Plus\Products\Product;

use Chatty\Http\Requests;
use Chatty\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

           $users = Tracker::logByRouteName('home')
                        ->where(function($query){
                        $query
                            ->where('parameter', 'id')
                            ->where('value', 1);
                        })
                        ->count();

        return view('admin.test')->with($users);
    }

    public function products(){
       return $products = Product::all();

    }
}
