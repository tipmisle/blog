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
		<p><b>Check out my projects</b></p>
		<div class="listSidebar">
			@include('project.partials.projectlist', [
			'projects' => $projects
			])
		</div>
		@include('templates.partials.sidebar')
	</div>
@endsection