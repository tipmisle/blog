@extends('templates.app')

@section('title')
	Add post
@endsection

@section('main')
	<h2>Add new post</h2>
	<div class="add">
		<form method="post" action="{{ route('post.addPost') }}">
			<input type="text" name="title" placeholder="Title">
			<textarea name="teaser" placeholder="Teaser" rows="3"></textarea>
			<textarea name="body" placeholder="Body" rows="10" id="editor"></textarea>
			<input type="text" name="image" placeholder="Image URL">
			<button type="submit">Add post</button>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
		</form>
	</div>
@endsection


@section('script')
	<script>
		 CKEDITOR.replace( 'editor' );
	</script>
@endsection