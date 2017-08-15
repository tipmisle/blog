<?php

Route::get('/', [
	'as' => 'home',
	'uses' => 'PostsController@index',
]);

Route::get('/post/add', [
	'as' => 'post.add',
	'uses' => 'PostsController@add',
]);


Route::post('/post/add', [
	'as' => 'post.addPost',
	'uses' => 'PostsController@addPost',
]);


Route::get('/post/{slug}/edit', [
	'as' => 'post.edit',
	'uses' => 'PostsController@edit',
]);


Route::post('/post/{slug}/edit', [
	'as' => 'post.editPost',
	'uses' => 'PostsController@editPost',
]);


Route::get('/post/{slug}/delete', [
	'as' => 'post.delete',
	'uses' => 'PostsController@delete',
]);


Route::get('/post/{post}', [
	'as' => 'post.show',
	'uses' => 'PostController@show',
]);


Route::get('/posts/{tag}', [
	'as' => 'posts.tagged',
	'uses' => 'PostsController@tagged',
]);

Route::get('/logout', [
	'as' => 'user.logout',
	'uses' => 'UserController@logout',
]);

Auth::routes();

