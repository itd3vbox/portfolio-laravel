<?php

namespace App\Search\WebAdmin\Projects;

use Illuminate\Support\Facades\DB;
use App\Entities\WebAdmin\Projects\Project as EntityProject;

class Project
{
    public static function all($options)
    {
        $data = [];

        $data = EntityProject::select([
            'projects.*',
        ])
            ->with([
                'imageMain'
            ])
            ->get();
              
              
        return $data;
    }

    public static function one($project_id)
    {
        $data = null;

        $data = EntityProject::select([
            'projects.*',
        ])
            ->where('id', $project_id)
            ->with([
                'imageMain'
            ])
            ->first();
              
        return $data;
    }
}
