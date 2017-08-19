@extends('templates.app')


@section('main')
	<div class="content">
		<h3>Posts by author: {{ $author }}</h3>
		@include('posts.partials.list', [
			'posts' => $posts
		])		
	</div>
	<div class="sidebar">
		@include('templates.partials.sidebar')
	</div>
@endsection