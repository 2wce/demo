<?php

namespace Chatty\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Chatty\Http\Requests;
use Chatty\Http\Controllers\Controller;

class GroupController extends Controller
{

   //this function accepts a search parameter and returns a json
   //object with the list of matched names
    public function getFriends(Request $request)
    {

        $searchTerm = $request->input('searchTerm');
        if($searchTerm!=NULL)
        {
            $user = \Chatty\Plus\Users\User::where('username',"like", "%".$searchTerm."%")->get();
            return $user->toJson();
        }




    }//function getFriends




}//class groupController
