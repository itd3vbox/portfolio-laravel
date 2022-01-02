<?php

namespace App\Http\Controllers\WebAdmin\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\WebAdmin\Projects\Project as EntityProject;
use App\Entities\WebAdmin\Projects\File as EntityFile;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class FileController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $project_id)
    {
        $data = $request->validate([
            'file' => ['required', 'file'],
        ]);

        $project = EntityProject::find($project_id);
        $file = $project->imageMain;
        if(isset($file))
        {
            Storage::disk('public')->delete($file->uri);
            $file->delete();
        }

        // IMAGE
        $file = new EntityFile;
        $file->type = 'IMAGE | IMAGE_MAIN';
        $file->uri = Storage::disk('public')->putFile($project->folder, $data['file']);

        $project->files()->save($file);

        return [
            'message'=> 'A new Image Main added.',
            'data' => [
                'file' => $file,
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
