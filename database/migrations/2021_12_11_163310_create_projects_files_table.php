<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_files', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('type'); // Images, PDF, links...
            $table->string('uri'); // src, url ...
            
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')
                ->on('projects')->onDelete('cascade');

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
        Schema::dropIfExists('projects_files');
    }
}
