<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageAssetsTable extends Migration
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
            $table->string('merek');
            $table->string('img1');
            $table->string('color1');
            $table->string('img2');
            $table->string('color2');
            $table->string('img3');
            $table->string('color3');
            $table->string('img4');
            $table->string('color4');
            $table->string('img5');
            $table->string('color5');
            $table->string('img6');
            $table->string('color6');
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
