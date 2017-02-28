<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function() {
//     return view('welcome');
// });

// Route::group(['prefix'=>'news'],function(){
// 	Route::get('/',[
// 		'uses'=>'newscontroller@index',
// 		'as'=>'news.index'
// 		]);
	
// 	Route::get('/add',[
// 		'uses'=>'newscontroller@create',
// 		'as'=>'news.add'
// 		]);
// 	Route::post('/store	',[
// 		'uses'=>'newscontroller@addnews',
// 		'as'=>'news.store'
// 		]);
	
// });
// Route::auth();

// Route::get('/home', 'HomeController@index');


// Route::get('/admin',[
// 	'uses'=>'AdminController@index',
// 	'as'=>'login'
// ]);

// Route::post('/login',[
// 	'uses'=>'AdminController@checkLogin',
// 	'as'=>'admin.login'
// ]);

// Route::group(['middleware'=>'auth'],function(){
// 	Route::get('/dashboard',[
// 		'uses'=>'AdminController@dashboard',
// 		'as'=>'admin.dashboard'
// 	]);

// 	Route::get("/logout",[
// 		'uses'=>'AdminController@getLogout',
// 		'as'=>'admin.logout'
// 	]);
// });

Route::get("/",function(){
	return view('index');
})->name('index');

Route::get("/about",function(){
	return view('pages.about');
})->name('about');


Route::get("/gallery",function(){
	return view('pages.gallery');
})->name('gallery');

Route::get("/contact",function(){
	return view('pages.contact');
})->name('contact');

Route::get('/admin',function(){
	return view('admin.login');
})->name('admin.index');


Route::group(['prefix'=>'admin'],function(){

	Route::post('/register',[
		'uses'=>'UserController@postRegister',
		'as'=>'register'
	]);

	Route::post('/signin',[
		'uses'=>'UserController@postLogin',
		'as'=>'signin'
	]);


	Route::group(['middleware'=>'auth'],function(){
		Route::get('/dashboard',[
			'uses'	=>'AdminController@index',
			'as'=>'dashboard'
		]);

		Route::get('/logout',[
			'uses'=>'AdminController@logout',
			'as'=>'logout'
		]);

		Route::post('/changepwd',[
			'uses'=>'AdminController@postChangePassword',
			'as'=>'pass_change'
		]);

		Route::group(["prefix"=>'post'],function(){
			Route::get("/",[
				"uses"=>'PostController@index',
				"as"=>'post.index'
			]);
			Route::get("/add",[
				"uses"=>'PostController@create',
				"as"=>'post.create'
			]);
			Route::post("/add",[
				"uses"=>'PostController@insert',
				"as"=>'post.insert'
			]);

			Route::get("/delete/{post_id}",[
				"uses"=>'PostController@delete',
				"as"=>'post.delete'
			]);

			Route::get("/category",[
				"uses"=>'CategoryController@index',
				"as"=>'category.index'
			]);
			Route::get("/category",[
				"uses"=>'CategoryController@add',
				"as"=>'category.add'
			]);
		});


	});
});