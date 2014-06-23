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

Route::get('/', function()
{
	//return View::make('hello');
        return 'Hello world ;P';
});

/*Route::get('/search', function()
{
	return View::make('search');
});*/

/*Route::match(array('GET','POST'),'/',function()
{
    return 'Mrs u pm opet';
});*/

/*Route::any('foo5',function()
{
   return 'ispis sa funkcijom any'; 
});*/

/*Route::get('foo',array('http',function()
{
    return 'Must be over HTTPS';
}));*/

/*Route::get('user/{name?}',function($name = 'Gojko')
{
    return $name;
});*/

/*Route::get('user/{name}', function($name)
{
    return 'mamu ti jebem jednom ';
})
->where('name', '[A-Za-z]+');

Route::get('user/{id}',function($id)
{
 return ' drugi ';
})
->where('id', '[0-9]+');

Route::get('user/{id}/{name}', function($id, $name)
{
    return ' i treci put ';
})
->where(array('id' => '[0-9]+', 'name' => '[a-z]'));
*/

/*Route::pattern('id', '[0-9]+');
Route::get('user/{id}',function($id)
{
    return 'preko patterna';
});*/ 


//
//Route::filter('foo', function()    // ne radi
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

Route::filter('old', function()   //ne radi
{
    if (Input::get('age') < 200)
    {
        return 'test';
    }
}); 

Route::get('user', array('before' => 'old', function()
{
    return 'You are over 200 years old!';
}));

/*Route::get('user',array('before' => 'old', function()  
{
    return 'You are over 200 years old';
}));*/ 

//Route::get('user', array('before' => 'old', 'uses' => 'UserController@showProfile'));   //jebe

/*Route::get('user', array('before' => 'auth|old', function()                            // rastura
{
    return 'You are authenticated and over 200 years old';
})); */

//Named Routes
/*Route::get('user/profile',array('as' => 'profile',function()
{
    return ' smr';
}));*/

//Route::get('user/profile', array('as' => 'profile', 'uses' => 'UserController@showProfile'));    // ne radi
//
//$url = URL::route('profile');
//$redirect = Redirect::route('profile');
//
//$name = Route::currentRouteName();



//Route::get('users', 'UserController@getIndex');   // ne radi zbog nepostojanja metode getIndex

//Route::get('user/{id}', 'UserController@showProfile');

/*Route::get('users', function()    //za prvi deo , bez baze podataka
{
	return View::make('users');
});*/

/*Route::get('users', function()    //za prvi deo , bez baze podataka
{
        $users = User::all();
	return View::make('users')->with('users',$users);
}); */