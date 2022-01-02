<?php

namespace App\Entities\Web;

use App\Entities\Base\User as BaseUser;

class User extends BaseUser
{
    function __construct() 
    {
        parent::__construct();

        $this->appends = array_merge($this->appends, [
            
        ]);       
    }
}