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
            $table->id();
            $table->text("title", 100);
            $table->text("ja_title", 100)->nullable();
            $table->mediumtext("description");
            $table->mediumtext("ja_description")->nullable();
            $table->longtext("content")->nullable();
            $table->longtext("ja_content")->nullable();
            $table->text("slug", 100);
            $table->text("url")->nullable();
            $table->integer("article_types_id");
            $table->integer("categories_id");
            $table->integer("companies_id")->nullable();
            $table->integer("platforms_id")->nullable();
            $table->boolean("work_in_progress")->nullable();
            $table->timestamp("date")->nullable();
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
