<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('page_category_id')->default('0');
            $table->string('slug', 100)->unique();
            $table->string('title', 255)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('tagline', 255)->nullable();
            $table->string('banner_img', 255)->nullable();
            $table->string('section', 255)->nullable();
            $table->longtext('content')->nullable();
            $table->string('layout', 255)->nullable();
            $table->integer('is_activated')->nullable();
            $table->string('meta_keywords', 255)->nullable();
            $table->string('meta_description', 255)->nullable();
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
        Schema::dropIfExists('pages');
    }
}
