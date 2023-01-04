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
            $table->integer('product_id')->nullable();
            $table->string('product_item_code')->nullable();
            $table->string('bar_code')->nullable();
            $table->string('name')->nullable();
            $table->integer('cost')->nullable();
            $table->integer('price')->nullable();
            $table->integer('price_rent')->nullable();
            $table->integer('thumb_id')->nullable(); //link to table images
            $table->integer('color_id')->nullable();
            $table->integer('color_avatar_id')->nullable(); //link to table images
            $table->integer('gallery_id')->nullable();
            $table->integer('sort')->default(1)->nullable();
            $table->timestamps();
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
