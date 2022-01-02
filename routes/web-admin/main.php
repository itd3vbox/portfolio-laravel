<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

include_once base_path('routes/web-admin/_app.php');
include_once base_path('routes/web-admin/_langs.php');
include_once base_path('routes/web-admin/_sign.php');
include_once base_path('routes/web-admin/_home.php');
include_once base_path('routes/web-admin/projects/main.php');
include_once base_path('routes/web-admin/articles/main.php');