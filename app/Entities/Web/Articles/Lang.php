<?php

namespace App\Entities\Web\Projects;

use App\Entities\Base\Projects\Lang as BaseLang;

class Lang extends BaseLang
{
    function __construct() 
    {
        parent::__construct();

        $this->appends = array_merge($this->appends, [
            
        ]);       
    }

    public function project()
    {
        return $this->belongsTo('App\Entities\Web\Projects\Project');
    }

    public function lang()
    {
        return $this->belongsTo('App\Entities\Web\Projects\Lang');
    }
}