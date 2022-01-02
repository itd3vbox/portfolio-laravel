<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.home.main', [
            'data' => [
                'web_url_app_search' => route('web.app.search'), //
                'web_url_projects_search' => route('web.projects.search-all'),
                'web_url_articles_search' => route('web.articles.search-all'),
            ],
        ]);
    }
}
