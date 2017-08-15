<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;

use Illuminate\Http\Request;

class PostsController extends Controller
{
	public function index(Post $post)
	{
		return view('home')->with([
			'posts' => $post->latestFirst()->isLive()->get(),
		]);
	}

	public function tagged(Tag $tag) {
		return view('posts.tag')->with([
			'posts' => $tag->posts()->latestFirst()->isLive()->get(),
			'tag' => $tag,
		]);
	}

	public function add() {
		return view('post.add');
	}

	public function addPost(Request $request) {
		$post = new Post;
		$post->author_id = 1;
		$post->live = true;
		$post->title = $request->title;
		$post->slug = str_slug($request->title, '-');
		$post->teaser = $request->teaser;
		$post->body = $request->body;
		$post->image = $request->image;
		$post->save();
		return redirect()->route('home');
	}

	public function edit($slug) {
		$post = Post::where('slug', '=', $slug)->first();
		return view('post.edit')->with(['post' => $post]);
	}

	public function editPost(Request $request, $slug) {
		$post = Post::where('slug', '=', $slug)->first();
		$post->author_id = 1;
		$post->live = true;
		$post->title = $request->title;
		$post->slug = str_slug($request->title, '-');
		$post->teaser = $request->teaser;
		$post->body = $request->body;
		$post->image = $request->image;
		$post->save();
		return redirect()->route('home');
	}

	public function delete($slug) {
		$post = Post::where('slug', '=', $slug)->first();
		$post->live = false;
		$post->save();
		return redirect()->route('home');
	}
}
