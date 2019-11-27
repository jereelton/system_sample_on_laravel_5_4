<?php

use \App\Jerry\LoginRoute as LoginRedirect;
use \App\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

/*Route::post('/register', function() {

    try
    {
    	User::create([
        	'user_level' => $_POST['user_level'],
    		'name' => $_POST['name'],
    		'email' => $_POST['email'],
    		'password' => bcrypt($_POST['password'])
    	]);

    	header("Location: /login");
		exit;

    }
    catch(\Exception $e) {

    	echo "Nao foi possivel criar o usuario: " . $e->getMessage();

    }

});*/

/*Route::get('/admin', function(){

	if(Auth::check() === false)
	{

		header("Location: /login");
		exit;

	}
	else
	{

		$user = auth()->user();

		$route = new LoginRedirect($user->user_level);

		$route->setRoute();
		
		header("Location: " . $route->getRoute());
		exit;

	}

});*/

/*Route::get('/logout', function(){

	Auth::logout();
	header("Location: /login");
	exit;

});*/

//Route::get('/home', 'HomeController@index');

/*Route::get('/public', function () {
	
	if(Auth::check()) {

		$user = auth()->user();

		$route = new LoginRedirect($user->user_level);

		$route->setRoute();

		return view($route->getRoute(), ['username' => $user->name]);
		exit;

	} else {

		return view('welcome_public');

	}

});*/






Route::get('/users', function(){

	if(!Auth::check()) {

		return view('site.index');

	} else {

		$user = auth()->user();

		$route = new LoginRedirect($user->user_level);

		$route->setUsersRoute();

		$listusers = User::all();

	    return view($route->getRoute(), ['username' => $user->name, 'listusers' => $listusers]);
		//exit;

	}

});

// Apos logar, filtramos para onde o usuario deve ir
Route::get('/access_control', function(){

	if(!Auth::check()) {

		return view('site.index');

	} else {

		$user = auth()->user();

		$route = new LoginRedirect($user->user_level);

		$route->setRoute();
		
	    return view($route->getRoute(), ['username' => $user->name, 'listusers' => '']);
		exit;

	}

});

// Apos logar, filtramos para onde o usuario deve ir
Route::get('/profile', function(){

	if(!Auth::check()) {

		return view('site.index');

	} else {

		$user = auth()->user();

		$route = new LoginRedirect($user->user_level);

		$route->setProfileRoute();
		
	    return view($route->getRoute(), ['username' => $user->name]);
		exit;

	}

});

// Pagina de bem vindo padrao para usuarios, mandatorio estar logado, senao vai para a pagina raiz do site
Route::get('/welcome', function () {

	if(!Auth::check()) {

		return view('site.index');

	} else {

		$user = auth()->user();

		$route = new LoginRedirect($user->user_level);

		$route->setWelcomeRoute();
		
	    return view($route->getRoute(), ['username' => $user->name]);

	}

});

// Acesso a raiz do site, apenas veificando login para informar o nome do usuario
Route::get('/', function () {
	
	if(!Auth::check()) {

		return view('site.index');

	} else {

		$user = auth()->user();
		
		return view('site.index', ['username' => $user->name]);
		
	}

});

