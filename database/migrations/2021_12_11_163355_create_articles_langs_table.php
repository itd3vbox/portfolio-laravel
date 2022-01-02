<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_langs', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('description_short');
            $table->text('description')->nullable();

            $table->unsignedBigInteger('article_id');
            $table->foreign('article_id')->references('id')
                ->on('articles')->onDelete('cascade');

            $table->unsignedBigInteger('lang_id');
            $table->foreign('lang_id')->references('id')
                ->on('langs')->onDelete('cascade');

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
        Schema::dropIfExists('articles_langs');
    }
}
