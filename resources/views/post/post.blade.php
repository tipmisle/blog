@extends('templates.app')

@section('header')
	@include('post.partials.image', [
		'url' => $post->image,
	])
@endsection

@section('title')
	{{ $post->title }}
@endsection

@section('color')
	#000
@endsection

@section('description')
	{{ $post->teaser }}
@endsection

@section('keywords') 
	@foreach($post->tags as $tag)
		{{ $tag->name }},
	@endforeach
	post,josip,rajkovic,jole
@endsection

@section('main')
	<article class="article">
		<div class="author">
			<img src="{{ $post->author->avatar() }}" alt="{{ $post->author->fullName() }}" class="author__image">
			<div class="author__details">
				<a href="" class="author__name">{{ $post->author->fullName() }}</a>
				<div class="author__post-time">{{ $post->created_at->diffForHumans() }}</div>
			</div>
		</div>
		<img src="{{ $post->image }}" alt="">
		<h1 class="article__header">{{ $post->title }}</h1>
		<h2 class="article__subheader">{{ $post->teaser }}</h2>
		<div class="article__body">
			{!! $post->body !!}
		</div>
		@foreach($post->tags as $tag)
			<a href="{{ route('posts.tagged', $tag->slug) }}" class="tag">{{ $tag->name }}</a>
		@endforeach
		<ul class="postNavigation">
			@if(!empty($previous))
				<li class="previous"><a href="{{ route('post.show', $previous) }}"><i class="ion ion-ios-arrow-left"></i> <p>Previous post</p></a></li>
			@endif
			@if(!empty($next))
				<li class="next"><a href="{{ route('post.show', $next) }}"><i class="ion ion-ios-arrow-right"></i> <p>Next post</p></a></li>
			@endif
		</ul>
	</article>
@endsection