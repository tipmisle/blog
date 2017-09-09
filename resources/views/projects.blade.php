@extends('templates.app')

@section('title')
	Projects
@endsection

@section('color')
	#000
@endsection

@section('description')
	Page where projects live.
@endsection

@section('keywords')
	projects,programming,php,laravel,js,javascript,css,html,html5,vue,react
@endsection

@section('main')
	<div class="content">
		@include('project.partials.projectlist', [
			'projects' => $projects
		])		
	</div>
	<div class="sidebar">
		<p><b>Latest posts on the blog</b></p>
		<div class="listSidebar">
			@include('posts.partials.list', [
			'posts' => $posts
		])
		</div>
		@include('templates.partials.sidebar')
	</div>
@endsection