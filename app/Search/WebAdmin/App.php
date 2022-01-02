<?php

namespace App\Search\WebZero;

use Illuminate\Support\Facades\DB;
use App\Entities\WebZero\App as EntityApp;

class App
{
    public static function home()
    {
        $_table_prefix = env('DB_TABLE_PREFIX');

        $sql = "
            (SELECT COUNT(*) FROM {$_table_prefix}projects) AS ind_projects,
            (SELECT COUNT(*) FROM {$_table_prefix}articles) AS ind_articles
        ";

        $data = EntityApp::select([
            DB::raw($sql)
        ])
            ->first();
              
        return $data;
    }
}
