<?php

namespace App\Entities\Web\Articles;

use App\Entities\Base\Articles\File as BaseFile;

class File extends BaseFile
{
    function __construct() 
    {
        parent::__construct();

        $this->appends = array_merge($this->appends, [
            
        ]);       
    }
}