@extends('templates.app')

@section('title')
	Home
@endsection

@section('color')
	#225378
@endsection

@section('description')
	My homepage, where articles and posts live.
@endsection

@section('keywords')
	home,programming,php,laravel,js,javascript,css,html,html5,vue,react
@endsection

@section('main')
	<div class="content">
		@include('posts.partials.list', [
			'posts' => $posts
		])
			
		{{ $posts->links('vendor.pagination.bootstrap-4') }}
	</div>	
	<div class="sidebar">
		@include('templates.partials.sidebar')
	</div>
@endsection