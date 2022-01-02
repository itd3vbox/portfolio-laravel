<?php

namespace App\Search\WebAdmin\Articles;

use Illuminate\Support\Facades\DB;
use App\Entities\WebAdmin\Articles\Lang as EntityLang;

class Article
{
    public static function all($options)
    {
        $_table_prefix = env('DB_TABLE_PREFIX');

        $sql = "";

        $data = EntityLang::select([
            'articles_langs.*',
        ])
            ->with([
                'article',
                'imageMain' => function($query) {
                    $query->where('type', 'REGEXP', 'IMAGE_MAIN');
                }
            ])
            ->get();
              
        return $data;
    }

    public static function one($article_lang_id)
    {
        $_table_prefix = env('DB_TABLE_PREFIX');

        $sql = "";

        $data = EntityLang::select([
            'articles_langs.*',
        ])
            ->where('articles_langs.id', $article_lang_id)
            ->with([
                'article',
                'imageMain' => function($query) {
                    $query->where('type', 'REGEXP', 'IMAGE_MAIN');
                }
            ])
            ->first();
              
        return $data;
    }
}
