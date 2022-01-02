<?php

namespace App\Entities\WebAdmin\Projects;

use App\Entities\Base\Projects\File as BaseFile;

class File extends BaseFile
{
    function __construct() 
    {
        parent::__construct();

        $this->appends = array_merge($this->appends, [
            
        ]);       
    }
}