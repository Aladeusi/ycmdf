<?php

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

Route::get('/', 'HomeController@showLandingPage')->name('landing.page');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/request/create', 'HireController@showHireForm')->name('request.create');

Route::post('/request/create', 'HireController@create')->name('request.create.submit');







Route::group(['prefix'=>'blog'], function () {
	

	Route::get('post/list', 'Blog\PostController@list')->name('blog.post.list');

	Route::get('post/view/{id}', 'Blog\PostController@view')->name('blog.post.view');

	Route::get('post/category/{id}', 'Blog\PostController@filterByCategory')->name('blog.post.category');

	Route::get('comment/create', 'Blog\CommentController@create')->name('blog.comment.create');








});






Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');



//Route::get('/admin/register', 'Admin\Auth\RegisterController@showRegisterForm');






Route::group(['middleware'=>['auth:admin']], function(){

	Route::get('/admin/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register')->middleware('superadmin');

	Route::post('/admin/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit')->middleware('superadmin');

	Route::get('/admin/home', 'Admin\HomeController@index')->name('admin.home');


	Route::get('/admin/request/list', 'Admin\HireController@list')->name('admin.request.list')->middleware('superadmin');

	Route::get('/admin/request/view/{id}', 'Admin\HireController@view')->name('admin.request.view')->middleware('superadmin');

	Route::get('/admin/request/completed/{id}', 'Admin\HireController@complete')->name('admin.request.completed')->middleware('superadmin');

	Route::get('/admin/request/delete/{id}', 'Admin\HireController@delete')->name('admin.request.delete')->middleware('superadmin');

	Route::get('/admin/post/create', 'Admin\PostController@showCreateForm')->name('admin.post.create');

	Route::post('/admin/post/create', 'Admin\PostController@create')->name('admin.post.create.submit');

	Route::get('/admin/post/list', 'Admin\PostController@list')->name('admin.post.list');

	Route::get('/admin/post/view/{id}', 'Admin\PostController@view')->name('admin.post.view');

	Route::get('/admin/post/delete/{id}', 'Admin\PostController@delete')->name('admin.post.delete');

	Route::get('/admin/post/blockComment/{id}', 'Admin\PostController@blockComment')->name('admin.post.comment.block');

	Route::get('/admin/post/unblockComment/{id}', 'Admin\PostController@unblockComment')->name('admin.post.comment.unblock');

	Route::get('/admin/comment/delete/{id}', 'Admin\PostController@deleteComment')->name('admin.comment.delete');


	Route::get('/admin/service/create', 'Admin\ServiceController@showCreateForm')->name('admin.service.create')->middleware('superadmin');

	Route::post('/admin/service/create', 'Admin\ServiceController@create')->name('admin.service.create.submit')->middleware('superadmin');

	Route::get('/admin/service/delete/{id}', 'Admin\ServiceController@delete')->name('admin.service.delete')->middleware('superadmin');

	Route::get('/admin/service/list', 'Admin\ServiceController@list')->name('admin.service.list')->middleware('superadmin');

	Route::get('/admin/testimony/create', 'Admin\TestimonyController@showCreateForm')->name('admin.testimony.create')->middleware('superadmin');

	Route::post('/admin/testimony/create', 'Admin\TestimonyController@create')->name('admin.testimony.create.submit')->middleware('superadmin');

	Route::get('/admin/testimony/delete/{id}', 'Admin\TestimonyController@delete')->name('admin.testimony.delete')->middleware('superadmin');

	Route::get('/admin/testimony/list', 'Admin\TestimonyController@list')->name('admin.testimony.list')->middleware('superadmin');



	Route::get('/admin/category/create', 'Admin\CategoryController@showCreateForm')->name('admin.category.create')->middleware('superadmin');

	Route::post('/admin/category/create', 'Admin\CategoryController@create')->name('admin.category.create.submit')->middleware('superadmin');

	Route::get('/admin/category/delete/{id}', 'Admin\CategoryController@delete')->name('admin.category.delete')->middleware('superadmin');

	Route::get('/admin/category/list', 'Admin\CategoryController@list')->name('admin.category.list')->middleware('superadmin');


	Route::get('/admin/about/create', 'Admin\ConfigController@showAboutCreateForm')->name('admin.about.create');

	Route::post('/admin/about/create', 'Admin\ConfigController@createAbout')->name('admin.about.create.submit');


	Route::get('/admin/paymentmethod/create', 'Admin\ConfigController@showPaymentCreateForm')->name('admin.paymentmethod.create')->middleware('superadmin');

	Route::post('/admin/paymentmethod/create', 'Admin\ConfigController@createPayment')->name('admin.paymentmethod.create.submit')->middleware('superadmin');

	Route::get('/admin/paymentmethod/delete/{id}', 'Admin\ConfigController@deletePayment')->name('admin.paymentmethod.delete')->middleware('superadmin');

	Route::get('/admin/paymentmethod/list', 'Admin\ConfigController@listPayment')->name('admin.paymentmethod.list')->middleware('superadmin');

	






	

});
