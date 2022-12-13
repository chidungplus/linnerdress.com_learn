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
            $table->integer('color_id')->nullable();
            $table->string('size', 5)->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('cost')->nullable();
            $table->integer('price')->nullable();
            $table->integer('price_rent')->nullable();
            $table->integer('thumb')->nullable();
            $table->string('code')->nullable();
            $table->string('bar_code')->nullable();
            $table->string('name')->nullable();
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
