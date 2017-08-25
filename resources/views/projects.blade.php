@extends('templates.app')

@section('title')
	Projects
@endsection

@section('main')
	<div class="content">
		@include('project.partials.projectlist', [
			'projects' => $projects
		])		
	</div>
	<div class="sidebar">
		<p>Latest posts on the blog</p>
		<div class="listSidebar">
			@include('posts.partials.list', [
			'posts' => $posts
		])
		</div>
		@include('templates.partials.sidebar')
	</div>
@endsection