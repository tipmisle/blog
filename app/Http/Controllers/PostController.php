<?php 
namespace App\Http\Controllers;


use App\Post;
use App\Http\Requests;
use Illuminate\Http\Request;


class PostController extends Controller {

	public function show(Post $post) {
		return view('post.post')->with([
			'post' => $post,
		]);
	}

}
