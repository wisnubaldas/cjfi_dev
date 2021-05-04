<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ImageAssets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_assets', function (Blueprint $table) {
            $table->id();
            $table->integer('brands_id');
            $table->string('name');
            $table->string('desc');
            $table->string('image');
            $table->string('image_small');
            $table->string('image_medium');
            $table->string('image_large');
            $table->string('status');
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
        Schema::dropIfExists('image_assets');
    }
}
