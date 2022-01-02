<?php

namespace App\Entities\Web;

use App\Entities\Base\App as BaseApp;

class App extends BaseApp
{
    function __construct() 
    {
        parent::__construct();

        $this->appends = array_merge($this->appends, [
            
        ]);       
    }
}