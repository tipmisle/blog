<nav class="navigation">
	<ul class="social">
			<li>
				<a href="https://www.facebook.com/juskebudala"><i class="ion-social-facebook"></i></a>
			</li>
			<li>
				<a href="https://twitter.com/josip_rajkovic"><i class="ion-social-twitter"></i></a>
			</li>
			<li>
				<a href="https://www.instagram.com/tipmisle/"><i class="ion-social-instagram"></i></a>
			</li>
			<li>
				<a href="https://www.linkedin.com/in/josip-rajkovi%C4%87-a611a7a3/"><i class="ion-social-linkedin"></i></a>
			</li>
			<li>
				<a href="https://www.linkedin.com/in/josip-rajkovi%C4%87-a611a7a3/"><i class="ion-ios-email"></i></a>
			</li>
		</ul>
	<div class="container">
		<h1>
			<a href="{{ route('home') }}">Josip Rajkovic - Jole</a>
		</h1>
		<ul>
			<li class="{{ Request::is('/') ? 'active' : '' }}">
				<a href="{{ route('home') }}">Home</a>
			</li>
			<li class="{{ Request::is('projects') ? 'active' : '' }}">
				<a href="{{ route('projects') }}">Projects</a>
			</li>
			<li class="{{ Request::is('about') ? 'active' : '' }}">
				<a href="{{ route('about') }}">About me</a>
			</li>
		</ul>
	</div>
</nav>	
