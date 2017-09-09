@extends('templates.app')

@section('title')
	Edit project
@endsection

@section('main')
	<h2>Edit project</h2>
	<div class="add">
		<form method="post" action="{{ route('project.editProject', $project->slug) }}">
			<input type="text" name="title" placeholder="Title" value="{{ $project->title }}" required>
			<textarea name="teaser" placeholder="Teaser" rows="3">{{ $project->teaser }}</textarea>
			<textarea name="body" placeholder="Body" rows="10" id="editor">{{ $project->body }}</textarea>
			<input type="text" name="image" placeholder="Image URL" value="{{ $project->image }}">
			<input type="text" name="url" placeholder="Project URL" value="{{ $project->url }}">
			<button type="submit">Edit project</button>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
		</form>
	</div>
@endsection

@section('script')
	<script>
		 CKEDITOR.replace( 'editor' );
	</script>
@endsection