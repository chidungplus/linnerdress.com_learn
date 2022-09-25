<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('admin_id');
            $table->string('permalink')->unique();
            $table->string('product_code')->nullable();
            $table->integer('cost')->nullable();
            $table->integer('price');
            $table->integer('price_rent')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('color_id')->nullable();
            $table->string('name');
            $table->text('content')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->integer('status')->default(1);
            $table->integer('thumb')->nullable();
            $table->integer('sort')->nullable();
            
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
        Schema::dropIfExists('products');
    }
}
