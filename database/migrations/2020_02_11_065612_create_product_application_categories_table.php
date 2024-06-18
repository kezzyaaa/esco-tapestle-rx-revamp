<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductApplicationCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_application_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_category_id');
            $table->foreign('product_category_id', 'fk_product_category2_id')->references('id')->on('product_categories')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->string('slug')->unique();
            $table->string('name')->nullable();
            $table->text('details')->nullable();
            $table->string('image')->nullable();
            $table->string('img_small')->nullable();
            $table->string('banner_img')->nullable();
            $table->string('is_activated')->nullable();
            $table->string('meta_keywords')->nullable();
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
        Schema::dropIfExists('product_application_categories');
    }
}
