<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Search\Web\Projects\Project as SearchProject;

class ProjectController extends Controller
{
    public function search(Request $request, $locale)
    {
        $options = [];
        return SearchProject::home($options);
    }
}
