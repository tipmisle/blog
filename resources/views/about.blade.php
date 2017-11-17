@extends('templates.app')

@section('title')
	About
@endsection

@section('color')
	#000
@endsection

@section('description')
	Page about my life and work.
@endsection

@section('keywords')
	about,programming,php,laravel,js,javascript,css,html,html5,vue,react
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
		<p>My estimated skill set progress:</p>
		<div class="progress">
			<p class="name">HTML</p>
			<div class="progress-inside" data-progress="85" style="width:0%; background-color: rgba(230, 120, 150, 1);">
				<p>85%</p>
			</div>
		</div>
		<div class="progress">
			<p class="name">CSS</p>
			<div class="progress-inside" data-progress="20" style="width:0%; background-color: #01A2A6;">
				<p>20%</p>
			</div>
		</div>
		<div class="progress">
			<p class="name">PHP</p>
			<div class="progress-inside" data-progress="65" style="width:0%; background-color: rgba(120, 66, 130, 1);">
				<p>65%</p>
			</div>
		</div>
		<div class="progress">
			<p class="name">Laravel</p>
			<div class="progress-inside" data-progress="45" style="width:0%; background-color: rgba(10, 200, 10, 1);">
				<p>45%</p>
			</div>
		</div>
		<div class="progress">
			<p class="name">JavaScript</p>
			<div class="progress-inside" data-progress="60" style="width:0%; background-color: rgba(10, 190, 200, 1);">
				<p>60%</p>
			</div>
		</div>		
		<p>If you would like to get to work with me or just get know me better, reach out to me. You can do so via links in sidebar.</p>
	</div>
	<div class="sidebar">
		@include('templates.partials.sidebar')
		<h3>Check out my projects</h3>
		<div class="listSidebar">
			@include('project.partials.projectlist', [
			'projects' => $projects
			])
		</div>
	</div>
@endsection