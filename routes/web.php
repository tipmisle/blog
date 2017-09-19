<?php
Auth::routes();
//Domov
Route::get('/', [
	'as' => 'home',
	'uses' => 'PostsController@index',
]);

/*
	ABOUT ROUTES
*/
Route::get('/about', [
	'as' => 'about',
	'uses' => 'HomeController@about',
]);


/*
	PROJECT ROUTES
*/
Route::get('/projects', [
	'as' => 'projects',
	'uses' => 'ProjectsController@index',
]);

Route::get('/project/add', [
	'as' => 'project.add',
	'uses' => 'ProjectsController@addView',
]);

Route::post('/project/add', [
	'as' => 'project.addProject',
	'uses' => 'ProjectsController@addProject',
]);

Route::get('project/{slug}/edit', [
	'as' => 'project.edit',
	'uses' => 'ProjectsController@editView'
]);

Route::post('project/{slug}/edit', [
	'as' => 'project.editProject',
	'uses' => 'ProjectsController@editProject'
]);

Route::get('/project/{project}', [
	'as' => 'project.show',
	'uses' => 'ProjectsController@show',
]);

Route::get('/project/{slug}/delete', [
	'as' => 'project.delete',
	'uses' => 'ProjectsController@delete',
]);

/*
	POST ROUTES
*/
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

Route::get('/postsby/{author}', [
	'as' => 'posts.byAuthor',
	'uses' => 'PostsController@byAuthor',
])->where('author', '[0-9]+');

Route::get('/logout', [
	'as' => 'user.logout',
	'uses' => 'UserController@logout',
]);




