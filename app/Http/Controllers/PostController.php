<?php 
namespace App\Http\Controllers;


use App\Post;
use App\Http\Requests;
use Illuminate\Http\Request;


class PostController extends Controller {

	public function show(Post $post) {
		$previous = Post::where("id", "<", $post->id)->first();
		$next = Post::where("id", ">", $post->id)->first();
		return view('post.post')->with([
			'post' => $post,
			'previous' => $previous,
			'next' => $next,
		]);
	}

}
