<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solutions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->unsignedBigInteger('old_id')->unique()->nullable();
            $table->string('slug', 100)->unique();
            $table->string('title', 255)->nullable();
            $table->string('icon', 255)->nullable();
            $table->string('image', 255)->nullable();
            $table->string('banner_img', 255)->nullable();
            $table->text('details')->nullable();
            $table->longText('content')->nullable();
            $table->text('ext_link')->nullable();
            $table->string('layout', 255)->nullable();
            $table->integer('is_activated')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
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
        Schema::dropIfExists('solutions');
    }
}
