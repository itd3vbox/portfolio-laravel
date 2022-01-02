<?php

namespace App\Entities\WebAdmin\Articles;

use App\Entities\Base\Articles\Article as BaseArticle;

class Article extends BaseArticle
{
    function __construct() 
    {
        parent::__construct();

        $this->appends = array_merge($this->appends, [
            
        ]);       
    }
}