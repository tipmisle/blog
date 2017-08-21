@extends('templates.app')

@section('main')
	<h2>Add new project</h2>
	<div class="add">
		<form method="post" action="{{ route('project.editProject', $project->slug) }}">
			<input type="text" name="title" placeholder="Title" value="{{ $project->title }}" required>
			<textarea name="teaser" placeholder="Teaser" rows="3">{{ $project->teaser }}</textarea>
			<textarea name="body" placeholder="Body" rows="10">{{ $project->body }}</textarea>
			<input type="text" name="image" placeholder="Image URL" value="{{ $project->image }}">
			<input type="text" name="url" placeholder="Project URL" value="{{ $project->url }}">
			<button type="submit">Edit project</button>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
		</form>
	</div>
@endsection