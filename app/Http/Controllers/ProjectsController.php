<?php



namespace App\Http\Controllers;
use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
	
    public function index(Project $project)
	{
		return view('projects')->with([
			'projects' => $project->get(),		
		]);
	}
	
	public function show(Project $project) {
		return view('project.project')->with([
			'project' => $project,
		]);
	}

	public function addView() {
		return view('project.add');
	}

	public function addProject(Request $request) {
		$project = new Project;
		$project->title = $request->title;
		$project->slug = str_slug($request->title, '-');
		$project->teaser = $request->teaser;
		$project->body = $request->body;
		$project->image = $request->image;
		$project->save();
		return redirect()->route('projects');
	}

	public function editView($slug) {
		$project = Project::where('slug', '=', $slug)->first();
		return view('project.edit')->with(['project' => $project]);
	}

	public function editProject(Request $request, $slug) {
		$project = Project::where('slug', '=', $slug)->first();
		$project->slug = str_slug($request->title, '-');
		$project->title = $request->title;
		$project->body = $request->body;
		$project->image = $request->image;
		$project->url = $request->url;
		$project->save();
		return redirect()->route('projects');
	}

	
	public function delete($slug) {
		$project = Project::where('slug', '=', $slug)->first();
		$project->delete();
		return redirect()->route('projects');
	}
}
