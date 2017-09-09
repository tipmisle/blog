<nav class="navigation">
	<div class="container">
		<h1>
			<a href="{{ route('home') }}">Josip Rajković</a>
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
