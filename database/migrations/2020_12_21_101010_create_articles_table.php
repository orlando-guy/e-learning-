<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->integerIncrements('id_articles');
            $table->string('title_article');
            $table->string('auteur');
            $table->string('article_cover');
            $table->time('delay');
            $table->dateTime('date_add');
            $table->integer('id_author')->unsigned()->index();
            #$table->foreign('id_author')->references('id_author')->on('authors')->onDelete('cascade');
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
        Schema::dropIfExists('articles');
    }
}
