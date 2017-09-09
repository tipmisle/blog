<h3>Reach out</h3>
<ul class="social">
	<li>
		<a href="https://www.facebook.com/juskebudala" target="_blank"><i class="ion-social-facebook"></i></a>
	</li>
	<li>
		<a href="https://twitter.com/josip_rajkovic" target="_blank"><i class="ion-social-twitter"></i></a>
	</li>
	<li>
		<a href="https://www.instagram.com/tipmisle/" target="_blank"><i class="ion-social-instagram"></i></a>
	</li>
	<li>
		<a href="https://www.linkedin.com/in/josip-rajkovi%C4%87-a611a7a3/" target="_blank"><i class="ion-social-linkedin"></i></a>
	</li>
	<li>
		<a href="mailto:josipr95@gmail.com" target="_top"><i class="ion-ios-email"></i></a>
	</li>
</ul>

@if(Auth::check())
	<h3>Profile</h3>
	<a href="{{ route('post.add') }}">Add new post</a>
	<br>
	<a href="{{ route('project.add') }}">Add new project</a>
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
		<button class="button" type="submit">Login</button>
		{{csrf_field()}}
	</form>
@endif