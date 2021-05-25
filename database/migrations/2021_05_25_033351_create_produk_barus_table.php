<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukBarusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk_barus', function (Blueprint $table) {
            $table->id();
            $table->integer('brand_id');
            $table->string('name');
            $table->string('image');
            $table->text('desc');
            $table->string('status');
            $table->boolean('void')->default(1);
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
        Schema::dropIfExists('produk_barus');
    }
}
