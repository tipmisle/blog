@if ($posts->count())
	@foreach ($posts as $post)
		<div class="post">
			<h1 class="post__header">
				<a href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a>
			</h1>
			<div class="post__author">
				By <a href="{{ route('posts.byAuthor', $post->author_id) }}">{{ $post->author->fullName() }}</a> <span class="post__time">{{ $post->created_at->diffForHumans() }}</span> @if(Auth::check()) - <a href="{{ route('post.editPost', $post->slug) }}">Edit</a> - <a href="{{ route('post.delete', $post->slug) }}">Delete</a>@endif
			</div>
			<a href="{{ route('post.show', $post->slug) }}">
				<img src="{{$post->image}}" alt="">
			</a>
			<div class="post__preview">{{ $post->teaser }}</div>
			<a class="button" href="{{ route('post.show', $post->slug) }}">Read more</a>
		</div>
	@endforeach
@else
	<p>Nothing to see here.</p>
@endif



