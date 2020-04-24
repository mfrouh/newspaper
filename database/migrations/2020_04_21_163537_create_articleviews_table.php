<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articleviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('article_id');
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->string("ip");
            $table->unique(['ip','article_id']);
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
        Schema::dropIfExists('articleviews');
    }
}
