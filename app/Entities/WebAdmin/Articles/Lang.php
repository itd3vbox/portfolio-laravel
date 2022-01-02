<?php

namespace App\Entities\WebAdmin\Articles;

use App\Entities\Base\Articles\Lang as BaseLang;

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
        return $this->belongsTo('App\Entities\WebAdmin\Articles\Artilce');
    }

    public function lang()
    {
        return $this->belongsTo('App\Entities\WebAdmin\Lang');
    }
}