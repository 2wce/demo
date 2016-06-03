<?php

namespace Chatty\Http\Controllers\UI;

use DB;
use Auth;
use Chatty\Plus\Users\User;
use Chatty\Plus\Products\Product;
use Chatty\Plus\Services\Service;
use Chatty\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SearchController extends Controller{

	public function __construct()
	{
	 	parent::__construct();
	}

	public function getResults(Request $request)
	{

		$query = $request->input('query');

		if (!$query) {
			return redirect()->route('home');
		}

				$users =
					User::where(  DB::raw( "CONCAT(first_name, ' ', last_name)" ), 'LIKE', "%{$query}%"  )
						->orWhere( 'username', 'LIKE',  "%{$query}%" )
						->get();

				$totalUsers = $users->count();

				$products =
					Product::where(  DB::raw( "product_name" ), 'LIKE', "%{$query}%"  )
						->get();

				$totalProducts = $products->count();

				$services =
					Service::where(  DB::raw( "name" ), 'LIKE', "%{$query}%"  )
						->get();

				$totalServices = $services->count();

			//dd(User::find(11)->followers());
				return view('search.results')
					->with('products',$products)
					->with ('totalProducts', $totalProducts)
					->with ('totalServices', $totalServices)
					->with ('totalUsers', $totalUsers)
					->with('services',$services)
					->with('users', $users);
	}

}
