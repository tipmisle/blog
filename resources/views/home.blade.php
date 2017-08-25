@extends('templates.app')

@section('title')
	Home
@endsection

@section('main')
	<div class="content">
		@include('posts.partials.list', [
			'posts' => $posts
		])		
	</div>
	<div class="sidebar">
		<p>Check out my projects</p>
		@include('project.partials.projectlist', [
			'projects' => $projects
		])
		@include('templates.partials.sidebar')
	</div>
@endsection