<?php

namespace App\Search\Web\Projects;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use App\Entities\Web\Projects\Project as EntityProject;


class Project
{
    public static function home($options)
    {
        //dd(App::currentLocale());

        $data = EntityProject::select([
            'projects.*',
        ])
            ->with([
                'imageMain' => function($query) {
                    $query->where('type', 'REGEXP', 'IMAGE_MAIN');
                }
            ])
            ->get();
            
           
        return $data;
    }
}
