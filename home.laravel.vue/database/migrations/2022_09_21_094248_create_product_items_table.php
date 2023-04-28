<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('product_id');
            $table->string('name')->nullable();
            $table->integer('avatar_id')->nullable(); //link to table images
            $table->integer('thumbnail_id')->nullable(); //link to table images
            $table->integer('gallery_id')->nullable();
            $table->string('color_value')->nullable();
            $table->string('size_value')->nullable();
            $table->integer('color_id')->nullable(); //link to table colors
            $table->integer('cost')->nullable();
            $table->integer('price')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('bar_code')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_items');
    }
}
