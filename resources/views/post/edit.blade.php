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
			@foreach($tags as $tag)
				<label for="{{ $tag->slug }}">{{ $tag->name }}</label>
				<input type="checkbox" {{in_array($tag->id, $taggables) ? 'checked' : ''}} name="tags[]" id="{{ $tag->slug }}" value="{{ $tag->id }}">
			@endforeach

			<button type="submit" class="button">Submit</button>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
		</form>
	</div>
@endsection


@section('script')
	<script>
		 CKEDITOR.replace( 'editor' );
	</script>
@endsection