<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configurations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('salt', 255)->nullable();
            $table->string('domain', 100)->nullable();
            $table->string('language', 5)->nullable();
            $table->string('meta_title', 255)->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('meta_author', 255)->nullable();
            $table->string('meta_copyright', 255)->nullable();
            $table->string('robots', 255)->nullable();
            $table->string('geo_region')->nullable();
            $table->string('geo_position', 255)->nullable();
            $table->string('geo_placename', 255)->nullable();
            $table->text('analytics')->nullable();
            $table->string('og_title', 255)->nullable();
            $table->string('og_type', 255)->nullable();
            $table->string('og_url', 255)->nullable();
            $table->string('og_image', 255)->nullable();
            $table->string('og_site_name', 255)->nullable();
            $table->string('og_description', 255)->nullable();
            $table->string('soc_facebook', 100)->nullable();
            $table->string('soc_youtube', 100)->nullable();
            $table->string('soc_soc_linkedin', 100)->nullable();
            $table->string('soc_soc_mail', 100)->nullable();

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
        Schema::dropIfExists('configurations');
    }
}
