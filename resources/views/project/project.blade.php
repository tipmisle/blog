@extends('templates.app')

@section('header')
	@include('project.partials.image', [
		'url' => $project->image,
	])
@endsection

@section('title')
	{{ $project->title }}
@endsection

@section('main')
	<article class="article">
		<h1 class="article__header">{{ $project->title }}</h1>
		<h2 class="article__subheader">{{ $project->teaser }}</h2>
		<div class="article__body">
			{!! Markdown::convertToHtml(e($project->body)) !!}
		</div>
	</article>
@endsection