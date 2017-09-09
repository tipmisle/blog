<?php

namespace App\Http\Controllers;

use DB;
use App\Post;
use App\Tag;
use App\Author;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class PostsController extends Controller
{
	public function index(Post $post)
	{
		return view('home')->with([
			'posts' => $post->latestFirst()->isLive()->paginate(5),
		]);
	}

	public function tagged(Tag $tag) {
		return view('posts.tag')->with([
			'posts' => $tag->posts()->latestFirst()->isLive()->get(),
			'tag' => $tag,
		]);
	}

	public function byAuthor(Author $author) {
		return view('posts.author')->with([
			'author' => $author->fullName(),
			'posts' => $author->posts()->get(),
		]);
	}

	public function add(Tag $tag) {
		return view('post.add')->with([
			'tags' => $tag->get(),
		]);
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
		foreach ($request->tags as $tag) {
			DB::table('taggables')->insert([
				'tag_id' => $tag,
				'taggable_id' => $post->id,
				'taggable_type' => "App\Post"
			]);
		}
		return redirect()->route('home');
	}

	public function edit($slug, Tag $tag) {
		$post = Post::where('slug', '=', $slug)->first();
		$taggables = DB::table("taggables")->where("taggable_id", "=", $post->id)->get()->pluck('tag_id')->toArray();
		return view('post.edit')->with(['post' => $post, 'tags' => $tag->get(), 'taggables' => $taggables]);
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
		DB::table('taggables')->where('taggable_id', '=', $post->id)->delete();
		foreach ($request->tags as $tag) {
			DB::table('taggables')->insert([
				'tag_id' => $tag,
				'taggable_id' => $post->id,
				'taggable_type' => "App\Post"
			]);
		}
		return redirect()->route('home');
	}

	public function delete($slug) {
		$post = Post::where('slug', '=', $slug)->first();
		$post->live = false;
		$post->save();
		return redirect()->route('home');
	}
}
