@if ($projects->count())
	@foreach ($projects as $project)
		<div class="post">
			<h1 class="post__header">
				<a href="{{ route('project.show', $project->slug) }}">{{ $project->title }}</a>
			</h1>
			<div class="post__author">
				@if(Auth::check())<a href="{{ route('project.edit', $project->slug) }}">Edit</a> - <a href="{{ route('project.delete', $project->slug) }}">Delete</a>@endif
			</div>
			<div class="post__preview">{{ $project->teaser }}</div>
		</div>
	@endforeach
@else
	<p>Nothing to see here.</p>
@endif