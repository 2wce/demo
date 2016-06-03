<?php

namespace Chatty\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Html;
use Chatty\Plus\Categories\Category;
use Chatty\Plus\Collections\Collection;
use Chatty\Plus\Types\Type;
use Auth;


abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function __construct(){

      $this->beforeFilter(function(){
        $userNotified = Auth::user();
        if ($userNotified) {
          $notifications = $userNotified->getNotificationsNotRead();
          View::share('notifications', $notifications);

        }

     	View::share('catnav', Category::all());
      	View::share('typenav', Type::all());
        View::share('collection', Collection::all());


      });
    }

}
