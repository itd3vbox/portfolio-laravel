<?php

namespace App\Http\Controllers\WebAdmin\Articles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\WebAdmin\Articles\Article as EntityArticle;
use App\Entities\WebAdmin\Articles\Lang as EntityLang;
use App\Entities\WebAdmin\Articles\File as EntityFile;
use App\Search\WebAdmin\Articles\Article as SearchArticle;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web-admin.articles.home.main', [
            'data' => [
                'web_admin_url_search_all' => route('web-admin.articles.search-all'),
                'web_admin_url_store' => route('web-admin.articles.store'),
                'web_admin_url_langs_search_all' => route('web-admin.langs.search-all'),
            ],
        ]);
    }

    public function searchAll(Request $request)
    {
        $options = [];
        return SearchArticle::all((object) $options);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string'],
            'short_description' => ['required', 'text'],
            'content' => ['required', 'json'],

            'file' => ['required', 'file'],
            'file_name' => ['required', 'string'],
            'file_type' => ['required', 'string'],
        ]);

        $article = new EntityArticle;
        $article->save();

        // CREATE FOLDER
        $now = Carbon::now();
        $now = $now->format('Ymdhis');
        $folder = 'articles/' . $now . '-' . $article->id;
        Storage::disk('public')->makeDirectory($folder);

        $article->save();
        
        $lang = new EntityLang;
        $lang->title = $data['title'];
        $lang->short_description = $data['short_description'];
        $lang->content = $data['content'];
        $article->lang()->save($lang);
        
        return [
            'message'=> 'A new Article added.',
            'data' => [
                'article' => $article,
            ],
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($article_id)
    {
        return view('web-admin.articles.edit.main', [
            'data' => [
                'article' => SearchArticle::one($article_id),
            ],
        ]);
    }
}
