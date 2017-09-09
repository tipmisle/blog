@extends('templates.app')

@section('header')
	@include('project.partials.image', [
		'url' => $project->image,
	])
@endsection

@section('title')
	{{ $project->title }}
@endsection

@section('color')
	#000
@endsection

@section('description')
	{{ $project->teaser }}
@endsection

@section('keywords') 
	project,josip,rajkovic,jole
@endsection

@section('main')
	<article class="article">
		<h1 class="article__header">{{ $project->title }}</h1>
		<h2 class="article__subheader">{{ $project->teaser }}</h2>
		<img src="{{ $project->image }}" alt="">
		<div class="article__body">
			<a href="{{ $project->url }}" target="_blank" class="button"><i class="ion-eye"></i> Visit project</a>
			@if(!$project->githubLink == "")
				<a href="{{ $project->githubLink }}" target="_blank" class="button gray"><i class="ion-social-github"></i> View code</a>
			@endif
			<br>
			{!! $project->body !!}
			<a href="{{ $project->url }}" target="_blank" class="button"><i class="ion-eye"></i> Visit project</a>
			@if(!$project->githubLink == "")
				<a href="{{ $project->githubLink }}" target="_blank" class="button gray"><i class="ion-social-github"></i> View code</a>
			@endif
		</div>
	</article>
@endsection