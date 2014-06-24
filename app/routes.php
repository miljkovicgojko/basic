<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::filter('isAuth', function()   
{
    if(Auth::check())
    {
        return Redirect::to('home');
    }
});

Route::get('login',array('before' => 'isAuth', 'uses' => 'HomeController@showLogin'));

Route::post('login',array('uses' => 'HomeController@doLogin'));

Route::get('logout',array('uses' =>'HomeController@doLogout'));

Route::get('home',function()
{
    return View::make('home');
});

// first and second tests
/*Route::get('/', function()
{
	//return View::make('hello');
        return 'Hello world ;P';
}); */

/*Route::get('/search', function()                //OK
{
	return View::make('search');
});

Route::match(array('GET','POST'),'/',function()           //OK
{
    return 'Hello world example 2';
}); */

/*Route::any('foo5',function()             //OK
{
   return 'ispis sa funkcijom any'; 
});*/

/*Route::get('foo',array('http',function()            //OK
{
    return 'Must be over HTTPS';
}));*/

/*Route::get('user/{name?}',function($name = 'Gojko')       //OK
{
    return $name;
});*/

/*Route::get('user/{name}', function($name)           //OK
{
    return 'Regular expression route constraints 1 ';
})
->where('name', '[A-Za-z]+');

Route::get('user/{id}',function($id)             //OK
{
 return 'Regular expression route constraints 2 ';
})
->where('id', '[0-9]+');

Route::get('user/{id}/{name}', function($id, $name)    //OK
{
    return 'Passing an array of wheres ';
})
->where(array('id' => '[0-9]+', 'name' => '[a-z]'));
*/

/*Route::pattern('id', '[0-9]+');           //OK
Route::get('user/{id}',function($id)
{
    return 'Defining global patterns';
});*/ 


//
//Route::filter('foo', function()    // eror
//{
//    if(Route::input('id') == 1)
//    {
//        return ' nesto';
//    }
//});
//
//Route::get('foo', function()
//{
//    return 'Must be over HTTPS';
//});

/*Route::filter('old', function()   // ?
{
    if (Input::get('age') < 200)
    {
        return 'test';
    }
}); 

Route::get('user', array('before' => 'old', function()
{
    return 'You are over 200 years old!';
}));  */

/*
Route::get('user', array('before' => 'old', 'uses' => 'UserController@showProfile'));   //eror

Route::get('user', array('before' => 'auth|old', function()                            // eror
{
    return 'You are authenticated and over 200 years old';
}));*/ 

//Named Routes
/*Route::get('user/profile',array('as' => 'profile',function()
{
    return ' test 2';
}));*/

//Route::get('user/profile', array('as' => 'profile', 'uses' => 'UserController@showProfile'));    // eror
//
//$url = URL::route('profile');
//$redirect = Redirect::route('profile');
//
//$name = Route::currentRouteName();



//Route::get('users', 'UserController@getIndex');   // eror getIndex

Route::get('user/{id}', 'UserController@showProfile');

/*Route::get('users', function()    //za prvi deo , bez baze podataka
{
	return View::make('users');
});*/

/*Route::get('users', function()    //za prvi deo , bez baze podataka
{
        $users = User::all();
	return View::make('users')->with('users',$users);
}); */