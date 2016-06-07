<?php

/*
|--------------------------------------------------------------------------
| Home Controller Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

#Filter Routes
	Route::get('/posts', [
		'uses' => '\Chatty\Http\Controllers\UI\HomeController@posts',
		'as'   => 'posts',

	]);

	Route::get('/prodcts', [
		'uses' => '\Chatty\Http\Controllers\UI\HomeController@prodcts',
		'as'   => 'prodcts',

	]);

	Route::get('/service', [
		'uses' => '\Chatty\Http\Controllers\UI\HomeController@service',
		'as'   => 'service',

	]);


Route::get('/timeline/{cat_id}', [
	'uses' => '\Chatty\Http\Controllers\UI\HomeController@getTimelineFilter',
	'as'   => 'timeline.show',

]);

/*
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Product Controller Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//@TODO figure out why this won't cache
Route::post('storeToCollection', [
	'uses' => '\Chatty\Http\Controllers\DbModels\CollectionsController@storeToCollection',
	'middleware' => ['auth'],
]);

#@TODO figure out why this won't cache
Route::post('storeReview', [
	'uses' => '\Chatty\Http\Controllers\DbModels\ProductsController@storeReview',
	'as' => 'storeReview',
	'middleware' => ['auth'],
]);

/*
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

#Signup
	Route::get('/signup', [
		'uses' => '\Chatty\Http\Controllers\Auth\AuthController@getSignup',
		'as'   => 'auth.signup',
		'middleware' => ['guest'],
	]);

	Route::post('/signup', [
		'uses' => '\Chatty\Http\Controllers\Auth\AuthController@postSignup',
		'middleware' => ['guest'],
	]);

#Signin
	Route::get('/signin', [
		'uses' => '\Chatty\Http\Controllers\Auth\AuthController@getSignin',
		'as'   => 'auth.signin',
		'middleware' => ['guest'],
	]);

	Route::post('/signin', [
		'uses' => '\Chatty\Http\Controllers\Auth\AuthController@postSignin',
		'middleware' => ['guest'],
		'after'  => 'setCookie',
	]);

#Signout
	Route::get('/signout', [
		'uses' => '\Chatty\Http\Controllers\Auth\AuthController@getSignout',
		'as'   => 'auth.signout',
	]);

#JWTAuth
#Route to create a new role
	Route::post('role', '\Chatty\Http\Controllers\Auth\JwtAuthenticateController@createRole');

#Route to create a new permission
	Route::post('permission', '\Chatty\Http\Controllers\Auth\JwtAuthenticateController@createPermission');

#Route to assign role to user
	Route::post('assign-role', '\Chatty\Http\Controllers\Auth\JwtAuthenticateController@assignRole');

#Route to attache permission to a role
	Route::post('attach-permission', '\Chatty\Http\Controllers\Auth\JwtAuthenticateController@attachPermission');

#API route group that we need to protect
	Route::group(['prefix' => 'api', 'middleware' => ['ability:admin,create-users']], function()
	{
	    Route::get('users', '\Chatty\Http\Controllers\Auth\JwtAuthenticateController@index');
	});

#Authentication route
	Route::post('authenticate', '\Chatty\Http\Controllers\Auth\JwtAuthenticateController@authenticate');
	/*
	|--------------------------------------------------------------------------
	*/

/*
|--------------------------------------------------------------------------
| Login Process Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

#Choose category for timeline
	Route::get('/select-cat', [
		'uses' => '\Chatty\Http\Controllers\UI\HomeController@selectCat',
		'as'   => 'cats',

	]);

	Route::post('addUserCategories', [
		'uses' => '\Chatty\Http\Controllers\Auth\AuthController@postCategorySelect',

	]);

#Activate User
	Route::get('/activate/{activation_code}', [
		'uses' => '\Chatty\Http\Controllers\Auth\AuthController@getActivate',
		'as' => 'activate',
		'middleware' => ['guest'],
	]);

	/*
	|--------------------------------------------------------------------------
	*/

/*
|--------------------------------------------------------------------------
| FollowsController Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

#Follow/Unfollow
	Route::get('follows',[
	  'uses' => '\Chatty\Http\Controllers\Relationships\FollowsController@store',
	  'as' => 'follow'
	  ]);

	Route::delete('follows/{id}',[
	    'uses' => '\Chatty\Http\Controllers\Relationships\FollowsController@destroy',
	    'as' => 'unfollow'
	]);

/*
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| ProfileController Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

#Show profile
	Route::get('/{username}/home', [
		'uses' => '\Chatty\Http\Controllers\UI\ProfileController@getProfile',
		'as'   => 'profile.index',

	]);


	Route::get('/{username}/timeline', [
		'uses' => '\Chatty\Http\Controllers\UI\ProfileController@getProfileTimeline',
		'as'   => 'profile.timeline',

	]);

	Route::get('/{username}/products', [
		'uses' => '\Chatty\Http\Controllers\UI\ProfileController@getProfileProducts',
		'as'   => 'profile.products',

	]);


	Route::get('/{username}/collections', [
		'uses' => '\Chatty\Http\Controllers\UI\ProfileController@getProfileCollections',
		'as'   => 'profile.collections',

	]);

	Route::get('/{username}/network', [
		'uses' => '\Chatty\Http\Controllers\UI\ProfileController@getProfileNetwork',
		'as'   => 'profile.network',

	]);

#edit the user's profile
	Route::get('/profile/edit', [
		'uses' => '\Chatty\Http\Controllers\UI\ProfileController@getEdit',
		'as'   => 'profile.edit',
		'middleware' => 'auth',
	]);

	Route::post('/profile/edit', [
		'uses' => '\Chatty\Http\Controllers\UI\ProfileController@postEdit',
		'middleware' => 'auth',
	]);

/*
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Friends/Customer Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

	Route::get('/friends', [
		'uses' => '\Chatty\Http\Controllers\Relationships\FriendController@getIndex',
		'as'   => 'friends.index',
		'middleware' => 'auth',
	]);

	Route::get('/friends/add/{username}', [
		'uses' => '\Chatty\Http\Controllers\Relationships\FriendController@getAdd',
		'as'   => 'friends.add',
		'middleware' => 'auth',
	]);

	Route::get('/friends/accept/{username}', [
		'uses' => '\Chatty\Http\Controllers\Relationships\FriendController@getAccept',
		'as'   => 'friends.accept',
		'middleware' => 'auth',
	]);

/*
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Home Route
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
	'uses' => '\Chatty\Http\Controllers\UI\HomeController@index',
	'as'   => 'home',

]);

/*
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

	Route::get('/admin', [
		'uses' => '\Chatty\Http\Controllers\Auth\AdminController@index',
		'as'   => 'admin.test',

	]);

/*
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Search Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

	Route::get('/search', [
		'uses' => '\Chatty\Http\Controllers\UI\SearchController@getResults',
		'as'   => 'search.results',
	]);

/*
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| EndorsementController Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::post('endorse',[
	'uses'=>'\Chatty\Http\Controllers\Relationships\EndorsementController@endorse',
    'as'=>'endorse',
    'middleware' => 'auth',
    ]);

/*
|--------------------------------------------------------------------------
| Status Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

	Route::post('/status', [
		'uses' => '\Chatty\Http\Controllers\DbModels\StatusController@postStatus',
		'as'   => 'status.post',
		'middleware' => 'auth',
	]);

	Route::post('/status/{statusId}/reply', [
		'uses' => '\Chatty\Http\Controllers\DbModels\StatusController@postReply',
		'as'   => 'status.reply',
		'middleware' => 'auth',
	]);


	Route::get('/status/{statusId}/like', [
		'uses' => '\Chatty\Http\Controllers\DbModels\StatusController@getLike',
		'as'   => 'status.like',
		'middleware' => 'auth',
	]);

/*
|--------------------------------------------------------------------------
| Products, Categories, Services, Types, Collections Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

#Controllers
	Route::resource('products', '\Chatty\Http\Controllers\DbModels\ProductsController') ;

	Route::resource('categories', '\Chatty\Http\Controllers\DbModels\CategoriesController') ;

	Route::resource('services', '\Chatty\Http\Controllers\DbModels\ServicesController') ;

	Route::resource('types', '\Chatty\Http\Controllers\DbModels\TypesController') ;

	Route::resource('companies', '\Chatty\Http\Controllers\DbModels\CompanyController') ;

	Route::resource('collections', '\Chatty\Http\Controllers\DbModels\CollectionsController') ;

	Route::get('/category', [
		'uses' => '\Chatty\Http\Controllers\DbModels\CategoriesController@getCategory',
	]);

	Route::post('shareCollection', [
		'uses' => '\Chatty\Http\Controllers\DbModels\CollectionsController@shareCollection',
		'middleware' => 'auth',
	]);
/*
|--------------------------------------------------------------------------
| Group Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

#get friends to add to group
	Route::get('/groups',array('uses'=>'\Chatty\Http\Controllers\Relationships\GroupController@getFriends',
		'as'=>'groups',
		));

/*
|--------------------------------------------------------------------------
| Message Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

#Messages
	Route::group(['prefix' => 'messages'], function () {
    Route::get('/', ['as' => 'messages', 'uses' => '\Chatty\Http\Controllers\Chat\MessagesController@index']);
    Route::get('create', ['as' => 'messages.create', 'uses' => '\Chatty\Http\Controllers\Chat\MessagesController@create']);
    Route::post('/', ['as' => 'messages.store', 'uses' => '\Chatty\Http\Controllers\Chat\MessagesController@store']);
    Route::get('{id}', ['as' => 'messages.show', 'uses' => '\Chatty\Http\Controllers\Chat\MessagesController@show']);
    Route::put('{id}', ['as' => 'messages.update', 'uses' => '\Chatty\Http\Controllers\Chat\MessagesController@update']);
	});
