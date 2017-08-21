@extends('templates.app')


@section('main')
	<div class="content">
		@include('project.partials.projectlist', [
			'projects' => $projects
		])		
	</div>
	<div class="sidebar">
		@include('templates.partials.sidebar')
	</div>
@endsection