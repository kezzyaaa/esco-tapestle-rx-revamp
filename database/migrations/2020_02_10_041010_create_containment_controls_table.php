<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContainmentControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('containment_controls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255)->nullable();
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->string('img_large', 255)->nullable();
            $table->string('img_small', 255)->nullable();
            $table->string('lottie_file_large', 255)->nullable();
            $table->string('meta_keywords', 255)->nullable();
            $table->string('meta_description', 500)->nullable();
            $table->string('is_activated', 255)->nullable();
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
        Schema::dropIfExists('containment_controls');
    }
}
