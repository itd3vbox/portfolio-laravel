<?php

namespace App\Search\WebAdmin;

use Illuminate\Support\Facades\DB;
use App\Entities\WebAdmin\Lang as EntityLang;

class Lang
{
    public static function all($options)
    {
        $data = EntityLang::select([
            'langs.*',
        ])
            ->get();
        
        return $data;
    }
}
