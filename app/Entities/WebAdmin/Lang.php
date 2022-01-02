<?php

namespace App\Entities\WebAdmin;

use App\Entities\Base\Lang as BaseLang;

class Lang extends BaseLang
{
    function __construct() 
    {
        parent::__construct();

        $this->appends = array_merge($this->appends, [
            
        ]);       
    }
}