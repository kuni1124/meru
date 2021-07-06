<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('name');
            $table->string('kananame')->nullable();
            $table->string('image')->nullable();
            $table->string('brand')->nullable();
            $table->text('text')->nullable();
            $table->integer('price');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('kategory_id');
            $table->unsignedBigInteger('product_state_id');
            $table->unsignedBigInteger('prefecture_id');
            $table->unsignedBigInteger('delivery_id');
            $table->timestamps();
            $table->string('motion')->nullable();
            $table->boolean('send')->nullable();
            
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
