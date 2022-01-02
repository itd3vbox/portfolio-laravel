<?php

namespace App\Entities\Web\Projects;

use App\Entities\Base\Projects\Project as BaseProject;

class Project extends BaseProject
{
    function __construct() 
    {
        parent::__construct();

        $this->appends = array_merge($this->appends, [
            
        ]);       
    }


    public function imageMain()
    {
        return $this->hasOne('App\Entities\Web\Projects\File');
    }
}