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
            $table->string('permalink')->unique();
            $table->string('name');
            $table->integer('category_id')->nullable();
            $table->string('product_code')->nullable();
            $table->text('content')->nullable();
            $table->integer('status')->default(1);
            $table->integer('title')->nullable();
            $table->integer('description')->nullable();
            $table->integer('sort')->default(0);
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
        Schema::dropIfExists('products');
    }
}
