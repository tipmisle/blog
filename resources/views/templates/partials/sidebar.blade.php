@if ($tags->count())

	<h3>Tags</h3>


	@foreach ($tags as $tag)
		<a href="{{ route('posts.tagged', $tag->slug) }}" class="tag">{{ $tag->name }}</a>
	@endforeach

	@if(Auth::check())
		<h3>Profile</h3>
		<a href="{{ route('post.add') }}">Add new post</a>
		<br>
		<a href="{{route('user.logout')}}">Logout</a>
	@else
		<h3>Login</h3>
			@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
		<form method="POST" action="{{route('login')}}">
			<input type="text" name="email" placeholder="Email">
			<input type="password" name="password" placeholder="Password">
			<button type="submit">Login</button>
			{{csrf_field()}}
		</form>
	@endif



@endif