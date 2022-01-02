<?php

namespace App\Entities\Web;

use App\Entities\Base\Message as BaseMessage;

class Message extends BaseMessage
{
    function __construct() 
    {
        parent::__construct();

        $this->appends = array_merge($this->appends, [
            
        ]);       
    }
}