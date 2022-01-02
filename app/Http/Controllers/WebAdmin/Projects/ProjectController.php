<?php

namespace App\Http\Controllers\WebAdmin\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\WebAdmin\Projects\Project as EntityProject;
use App\Entities\WebAdmin\Projects\File as EntityFile;
use App\Search\WebAdmin\Projects\Project as SearchProject;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web-admin.projects.home.main', [
            'data' => [
                'web_admin_url_search_all' => route('web-admin.projects.search-all'),
                'web_admin_url_store' => route('web-admin.projects.store'),
            ],
        ]);
    }

    public function searchAll(Request $request)
    {
        $options = [];
        return SearchProject::all((object) $options);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'status' => ['required', 'integer'],
            'name' => ['required', 'string'],
            'links' => ['required', 'string'],

            'file' => ['required', 'file'],
        ]);

        $project = new EntityProject;
        $project->status = $data['status'];
        $project->name = $data['name'];
        $project->links = $data['links'];
        $project->save();

        // CREATE FOLDER
        $now = Carbon::now();
        $now = $now->format('Ymdhis');
        $project->folder = 'projects/' . $now . '-' . $project->id;
        Storage::disk('public')->makeDirectory($project->folder);

        $project->save();

        // IMAGE
        $file = new EntityFile;
        $file->type = 'IMAGE | IMAGE_MAIN';
        $file->uri = Storage::disk('public')->putFile($project->folder, $data['file']);

        $project->files()->save($file);
        
        return [
            'message'=> 'A new Project added.',
            'data' => [
                'project' => $project,
            ],
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($project_id)
    {
        return view('web-admin.projects.edit.main', [
            'data' => [
                'project' => SearchProject::one($project_id),
            ],
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function statusUpdate(Request $request, $project_id)
    {
        $data = $request->validate([
            'status' => ['required', 'integer'],
        ]);

        $project = EntityProject::find($project_id);
        $project->status = $data['status'];
        $project->save();

        return [
            'message'=> 'The Project updated.',
            'data' => [
                'project' => $project,
            ],
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function nameUpdate(Request $request, $project_id)
    {
        $data = $request->validate([
            'name' => ['required', 'string'],
        ]);

        $project = EntityProject::find($project_id);
        $project->name = $data['name'];
        $project->save();

        return [
            'message'=> 'The Project updated.',
            'data' => [
                'project' => $project,
            ],
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function linksUpdate(Request $request, $project_id)
    {
        $data = $request->validate([
            'links' => ['required', 'json'],
        ]);

        $project = EntityProject::find($project_id);
        $project->links = $data['links'];
        $project->save();

        return [
            'message'=> 'The Project updated.',
            'data' => [
                'project' => $project,
            ],
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($project_id)
    {
        $data = $request->validate([
            'name' => [
                'required', 
                'string',
                Rule::exists('projects')->where(function ($query) use ($project_id) {
                    return $query->where('id', $project_id);
                }),
            ],
        ]);

        $project = EntityProject::find($project_id);
        Storage::disk('public')->deleteDirectory($project->folder);
        $project->delete();

        return [
            'message'=> 'The Project deleted.',
            'data' => [
                'project' => $project,
            ],
        ];
    }
}
