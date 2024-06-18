<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code', 100)->nullable();
            $table->unsignedBigInteger('product_category_id');
            $table->unsignedBigInteger('old_id')->unique()->nullable();
            $table->foreign('product_category_id', 'fk_product_category_id')->references('id')->on('product_categories')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->unsignedBigInteger('product_application_category_id')->default(0);
            $table->string('slug', 100)->unique()->nullable();
            $table->string('brand', 255)->nullable();
            $table->string('name', 255)->nullable();
            $table->text('details')->nullable();
            $table->text('applications')->nullable();
            $table->string('image', 255)->nullable();
            $table->string('image_thumb', 255)->nullable();
            $table->string('banner_img', 255)->nullable();
            $table->string('video', 255)->nullable();
            $table->text('ext_link')->nullable();
            $table->integer('is_activated')->nullable();
            $table->string('meta_title', 255)->nullable();
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
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('fk_product_category_id');
        });
        Schema::dropIfExists('products');

    }
}
