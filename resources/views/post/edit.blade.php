@extends('templates.app')

@section('title')
	Edit post
@endsection

@section('main')
	<h2>Edit post</h2>
	<div class="add">
		<form method="post" action="{{ route('post.editPost', $post->slug) }}">
			<input type="text" name="title" placeholder="Title" value="{{$post->title}}">
			<textarea name="teaser" placeholder="Teaser" rows="3">{{$post->teaser}}</textarea>
			<textarea name="body" placeholder="Body" rows="10" id="editor">{{$post->body}}</textarea>
			<input type="text" name="image" placeholder="Image URL" value="{{$post->image}}">
			<button type="submit">Submit</button>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
		</form>
	</div>
@endsection


@section('script')
	<script>
		 CKEDITOR.replace( 'editor' );
	</script>
@endsection