<?php

namespace Chatty\Http\Controllers\UI;

use Auth;
use DB;
use Cache;
use Redis;
use Notifynder;
use Chatty\Plus\Users\User;
use Chatty\Plus\Statuses\Status;
use Chatty\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function landing()
    {
        return view('timeline.landing');
    }

    public function index()
    {
        #Show timeline if user is authenticated
        if (Auth::check() ) {

            $col = Auth::user()->categories()->get()->pluck('id');

            if(!Cache::has('statuses')){
             $tests =
                Status::where('user_id', Auth::user()->id)
                  ->orWhereIn('cat_id', $col)
                  ->orderBy('created_at', 'desc')
                  ->paginate(10);

             Cache::put('statuses',$tests,1);
          }
           else {
              $tests = Cache::get('statuses');
              Cache::forget('statuses');
          }

           //dd($tests);
          #provide statuses and replies to the view
          return view('timeline.index')
            ->with('statuses', $tests);
//            ->with('notifications', $notifications);
        }elseif (Auth::check() && Auth::user()->hasRole('company')) {
          return view('companies.timeline');
        }
        // for guests, simply show the home page
          return view('home');
    }

    public function selectCat()
    {
        // provide statuses and replies to the view
      return view('auth.select-cat');
    }

    public function getTimelineFilter($id)
    {
        // show timeline if user is authenticated
      if (Auth::check()) {
          // get the statuses (own and from friends)
          // (but filter out the replies - see Status model!)
          if (!Cache::has('t-filter')) {

            $statuses =
              Status::where('cat_id', $id)
                ->orderBy('created_at', 'desc')
                ->paginate(6);

             Cache::put('t-filter',$statuses,1);
         }
           else {
              $statuses = Cache::get('t-filter');
              Cache::forget('t-filter');
           }


          // provide statuses and replies to the view
          return view('timeline.posts')
              ->with('statuses', $statuses);
      }
      // for guests, simply show the home page
      return view('home/posts');
    }

    public function prodcts()
    {
        // show timeline if user is authenticated
      if (Auth::check()) {
        $user = Auth::user()->id;
          // get the statuses (own and from friends)
          // (but filter out the replies - see Status model!)
        //$value  = str_replace('["','', );
        //$va = str_replace('"]','', $value);
        $col = Auth::user()->categories()->get()->pluck('id');
        if (!Cache::has('p-filter')) {
           $statuses =
              Status::where('type_id','=', 1)
                ->whereIn('cat_id', $col)
                ->orderBy('created_at', 'desc')
                ->paginate(10);

           Cache::put('p-filter',$statuses,1);
         }
        else {
               $statuses = Cache::get('p-filter');
               Cache::forget('p-filter');
        }
          // provide statuses and replies to the view
        return view('timeline.posts')
            ->with('statuses', $statuses);
      }
      // for guests, simply show the home page
      return view('home/prodcts');
    }

    public function posts()
    {
        // show timeline if user is authenticated
      if (Auth::check()) {
          // get the statuses (own and from friends)
          // (but filter out the replies - see Status model!)
          $user = Auth::user()->id;
          $col = Auth::user()->categories()->get()->pluck('id');
            // get the statuses (own and from friends)
            // (but filter out the replies - see Status model!)
          //$value  = str_replace('["','', Auth::user()->categories);
          //$va = str_replace('"]','', $value);

          if (!Cache::has('post-filter')) {
             $statuses =
                Status::where('type_id','=', 1)
                  ->whereIn('cat_id', $col)
                  ->orderBy('created_at', 'desc')
                  ->paginate(10);

             Cache::put('post-filter',$statuses,1);
           }
          else {
                 $statuses = Cache::get('post-filter');
                 Cache::forget('post-filter');
          }
          // provide statuses and replies to the view
        return view('timeline.posts')
            ->with('statuses', $statuses);
      }
      // for guests, simply show the home page
      return view('home');
    }

    public function service()
    {
        // show timeline if user is authenticated
        if (Auth::check()) {
          $user = Auth::user()->id;
          $col = Auth::user()->categories()->get()->pluck('id');
            // get the statuses (own and from friends)
            // (but filter out the replies - see Status model!)
          //$value  = str_replace('["','', Auth::user()->categories);
          //$va = str_replace('"]','', $value);

          if (!Cache::has('s-filter')) {
             $statuses =
                Status::where('type_id','=', 1)
                  ->whereIn('cat_id', $col)
                  ->orderBy('created_at', 'desc')
                  ->paginate(10);

             Cache::put('s-filter',$statuses,1);
           }
          else {
                 $statuses = Cache::get('s-filter');
                 Cache::forget('s-filter');
          }
            // provide statuses and replies to the view
            return view('timeline.service')
                ->with('statuses', $statuses);
        }
        // for guests, simply show the home page
        return view('home');
    }
}//class
