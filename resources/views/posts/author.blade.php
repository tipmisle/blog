@extends('templates.app')

@section('title')
	{{ $author }}
@endsection

@section('color')
	#000
@endsection

@section('description')
	A page where posts written by {{ $author }} are listed.
@endsection

@section('keywords') 
	posts,josip,rajkovic,jole,author
@endsection

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