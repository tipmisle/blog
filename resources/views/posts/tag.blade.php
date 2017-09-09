@extends('templates.app')

@section('title')
	Tag: {{ $tag->name }}
@endsection

@section('color')
	#000
@endsection

@section('description')
	A page where posts with {{ $tag->name }} tag are listed.
@endsection

@section('keywords') 
	posts,{{ $tag->name }}
@endsection

@section('main')
	<div class="content">
		<h3>Tagged in: {{ $tag->name }}</h3>
		@include('posts.partials.list', [
			'posts' => $posts
		])		
	</div>
	<div class="sidebar">
		@include('templates.partials.sidebar')
	</div>
@endsection