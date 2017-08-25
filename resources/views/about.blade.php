@extends('templates.app')

@section('title')
	About
@endsection

@section('main')
	<div class="content">
		<h1>Hi there!</h1>
		<p>Great! Now that I've got your attention, I would like to introduce myself.</p>
		<p>My name is Josip Rajkovic and I come from Kranj, Slovenia. It is a small beautiful country full of friendly people.</p>
		<p>I am big (literally) car enthusiast, that is trying to succeed in life as a frontend developer.</p>
		<p>Ever since I was a little boy I was fascinated by computers. My first one was Pentium 4 powered monster which was used as test bunny for all of my then stupid attempts at trying to figure out, how computer worked. First it began with installing games, then Windows and only then I knew how to troubleshoot some problems asociated with OS.</p>
		<p>This led me to visit technology oriented high school and learn basic C# programming and web developing. This further fueled my passion to work with computers.</p>
		<p>All my required school practices were finished at one big company in my region, Savatech d.o.o. I was working there for combined 1 year in IT department as user support.</p>
		<p>Then I realised I wanted to create something, not religiously use pre-existing software, that didn't suit me at all. I knew I was a very wrong guy for IT.</p>
		<p>So then I started learning basic HTML, then continued with PHP, JS. My future plans are to master Laravel and React.</p>
		<p>If you would like to get to work with me or just get know me better, contact me. You can do so by:</p>
		<ul>
			<li><a href="https://www.facebook.com/juskebudala">Facebook</a></li>
			<li><a href="https://twitter.com/josip_rajkovic">Twitter</a></li>
			<li><a href="https://www.instagram.com/tipmisle/">Instagram</a></li>
			<li><a href="https://www.linkedin.com/in/josip-rajkovi%C4%87-a611a7a3/">LinkedIn</a></li>
			<li><a href="https://www.linkedin.com/in/josip-rajkovi%C4%87-a611a7a3/">Mail</a></li>
		</ul>
	</div>
	<div class="sidebar">
		<p>Check out my projects</p>
		@include('project.partials.projectlist', [
			'projects' => $projects
		])
		@include('templates.partials.sidebar')
	</div>
@endsection