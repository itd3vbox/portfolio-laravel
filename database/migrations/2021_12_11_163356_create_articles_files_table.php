<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_files', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('type'); // Images, PDF, links...
            $table->string('uri'); // src, url ...
            
            $table->unsignedBigInteger('article_lang_id');
            $table->foreign('article_lang_id')->references('id')
                ->on('articles_langs')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles_files');
    }
}
